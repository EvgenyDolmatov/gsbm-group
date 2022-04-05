<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterSuccessByAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $pass;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $pass)
    {
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
        return $this->from('no-reply@gsbm-group.ru', config('app.name'))
            ->subject('Вы зачислены в группу '.$this->user->group->name.'!')
            ->view('emails.register-success-by-admin', ['user' => $this->user]);
    }
}
