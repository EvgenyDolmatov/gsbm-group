<?php

namespace App\Models;

use App\Notifications\CustomResetPasswordNotification;
use App\Notifications\CustomVerificationEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomResetPasswordNotification($token));
    }

    public function group()
    {
        return $this->belongsTo(StudyGroup::class, 'group_id');
    }

    public function results()
    {
        return $this->hasMany(QuizResult::class);
    }

    public static function createByAdmin(array $input, $group, $pass)
    {
        $user = new static;
        $user->fill($input);
        $user->password = Hash::make($pass);
        $user->group_id = $group->id;
        $user->save();

        return $user;
    }

    public function getFullName() : string
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
        $res = $this->results->where('quiz_id', $quiz->id)->first();

        if ($res) {
            if ($res->points >= 50) {
                return 'Сдал';
            }
            return 'Не сдал';
        }
        return 'Не сдавал';
    }

    public function getResultDate($group)
    {
        $quiz = $group->course->quizzes->first();
        $res = $this->results->where('quiz_id', $quiz->id)->first();

        if ($res) {
            return $this->created_at;
        }
        return '-';
    }
}
