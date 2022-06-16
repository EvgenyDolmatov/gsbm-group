<?php

namespace App\Mail;

use App\Models\StudyGroup;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterSuccessByAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $group, $user, $pass;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(StudyGroup $group, User $user, $pass)
    {
        $this->group = $group;
        $this->user = $user;
        $this->pass = $pass;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

//        dd($group = $this->user->groups->latest()->name);

        return $this->from('no-reply@gsbm-group.ru', config('app.name'))
            ->subject('Вы зачислены в группу '.$this->group->name.'!')
            ->view('emails.register-success-by-admin', ['user' => $this->user]);
    }
}
