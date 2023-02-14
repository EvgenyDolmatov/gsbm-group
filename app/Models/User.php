<?php

namespace App\Models;

use App\Notifications\CustomResetPasswordNotification;
use App\Notifications\CustomVerificationEmail;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, HasRoles, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'surname',
        'name',
        'middle_name',
        'email',
        'phone',
        'birthday',
        'password',
        'group_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new CustomVerificationEmail($this));
    }

    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPasswordNotification($token));
    }

    public function groups()
    {
        return $this->belongsToMany(StudyGroup::class, 'group_user');
    }

    public function results(): HasMany
    {
        return $this->hasMany(UserResult::class);
    }

    /*
     * Получаем только открытые направления для сотрудника
     */
    public function getStudyAreasThroughDocs()
    {
        $areaIds = [];
        foreach ($this->attestationDocs as $doc) {
            if (!in_array($doc->study_area_id, $areaIds)) {
                $areaIds[] = $doc->study_area_id;
            }
        }

        return StudyArea::whereIn("id", $areaIds)->get();
    }

    public static function createByAdmin(array $input, $pass, $group = null)
    {
        $user = new static;
        $user->fill($input);
        $user->password = Hash::make($pass);
        $user->save();

        if ($group) {
            $user->groups()->attach($group->id);
        }

        return $user;
    }

    public function getFullName(): string
    {
        $arr = array();

        if ($this->surname)
            $arr[] = $this->surname;

        if ($this->name)
            $arr[] = $this->name;

        if ($this->middle_name)
            $arr[] = $this->middle_name;

        return implode(' ', $arr);
    }

    public function getResultByGroup($group)
    {
        $quiz = $group->course->quizzes->first();

        if ($quiz) {
            $res = $this->results->where('quiz_id', $quiz->id)->first();

            if ($res) {
                if ($res->points >= 50) {
                    return 'Сдал';
                }
                return 'Не сдал';
            }
        }

        return 'Не сдавал';
    }

    public function getResultDate($group)
    {
        $quiz = $group->course->quizzes->first();

        if ($quiz) {
            $res = $this->results->where('quiz_id', $quiz->id)->first();

            if ($res) {
                return $this->created_at;
            }
        }

        return '-';
    }

    public function examAccess($course): bool
    {
        $courseLessons = $course->stages->where("type", "lesson");
        $courseIds = [];
        foreach ($courseLessons as $courseLesson) {
            $courseIds[] = $courseLesson->id;
        }

        $userLessons = $this->results->whereIn("stage_id", $courseIds)->where("is_passed", 1);
        if ($courseLessons->count() !== $userLessons->count()) {
            return false;
        }

        $quizIds = [];
        $courseQuizzes = $course->stages->where("type", "quiz");
        foreach ($courseQuizzes as $courseQuiz) {
            $quizIds[] = $courseQuiz->id;
        }

        $passedQuizzes = $this->results->whereIn("stage_id", $quizIds)->where("is_passed", 1);
        if (!$passedQuizzes->count()) {
            return false;
        }

        return true;
    }

    public function getExamResultByCourse($course)
    {
        $courseStages = $course->stages->where("type", "quiz");
        $userResults = $this->results->where("is_exam", 1);

        foreach ($userResults as $userResult) {
            foreach ($courseStages as $courseStage) {
                if ($courseStage->id === $userResult->stage_id) {
                    return $userResult;
                }
            }
        }
        return false;
    }

    public function getResultsByGroup($group)
    {
        $stageIds = [];
        foreach ($group->course->stages as $stage) {
            $stageIds[] = $stage->id;
        }

        return $this->results->whereIn("stage_id", $stageIds);
    }

    public function getProfession(): string
    {
        $res = [];
        if ($this->profession) {
            $res[] = $this->profession->name;
        }
        if ($this->profession_discharge) {
            $res[] = $this->profession_discharge . " разряд";
        }

        return !empty($res) ? implode(", ", $res) : "Нет данных";
    }

    public function getCompany(): string
    {
        if ($this->company) {
            return $this->company->name;
        }
        return "Нет данных";
    }

    public function getBirthday(): string
    {
        if ($this->birthday) {
            return Carbon::createFromFormat("Y-m-d", $this->birthday)->format("d.m.Y");
        }
        return "Нет данных";
    }

    /*
     * Получаем последний сертификат и протокол
     */
    public function getLastDocsByStudyArea($area): array
    {
        $docs = [];
        $protocol = $this->attestationDocs->where("study_area_id", $area->id)->where("type", "protocol")->last();
        $cert = $this->attestationDocs->where("study_area_id", $area->id)->where("type", "certificate")->last();

        if ($protocol) {
            $validFrom = Carbon::createFromFormat("Y-m-d", $protocol->valid_from)->format("d.m.Y");
            $docs["protocol"] = "№" . $protocol->number . "&nbsp;от&nbsp;" . $validFrom . "&nbsp;г.";
        } else {
            $docs["protocol"] = "Нет данных";
        }

        if ($cert) {
            $validFrom = Carbon::createFromFormat("Y-m-d", $cert->valid_from)->format("d.m.Y");
            $docs["cert"] = "№" . $cert->number . "&nbsp;от&nbsp;" . $validFrom . "&nbsp;г.";
        } else {
            $docs["protocol"] = "Нет данных";
        }

        return $docs;
    }
}
