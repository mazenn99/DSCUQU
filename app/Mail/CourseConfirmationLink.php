<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CourseConfirmationLink extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $courseLink;
    public $courseTitle;
    public $courseDate;
    public $startTime;
    
    public function __construct($name , $title , $link , $courseDate , $startTime)
    {
        $this->name       =  $name;
        $this->courseLink =  $title;
        $this->courseLink =  $link;
        $this->courseDate =  $courseDate;
        $this->startTime  =  $startTime;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(Config('app.no-reply-mail'))
            ->markdown('emails.CourseConfirmationLink');
    }
}
