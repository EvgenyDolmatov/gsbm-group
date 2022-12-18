<?php

namespace App\Models;

use App\Notifications\CustomResetPasswordNotification;
use App\Notifications\CustomVerificationEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
}
