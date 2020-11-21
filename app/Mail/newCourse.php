<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class newCourse extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $courseName;
    public $courseDate;
    public $courseContent;
    public $courseHours;
    public $slug;
    public function __construct($courseName , $courseDate , $courseContent , $courseHours , $slug)
    {
        $this->courseName = $courseName;
        $this->$courseDate = $courseDate;
        $this->courseContent = $courseContent;
        $this->courseHours = $courseHours;
        $this->slug = $slug;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('new Courses Published')
                    ->from(Config('app.no-reply-mail'))
                    ->markdown('emails.newCourse');
    }
}
