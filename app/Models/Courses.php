<?php

namespace App\Models;

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{

    protected $fillable = ['admins_id' , 'speaker_id' , 'title' , 'details' , 'picture' , 'slug' , 'sex' , 'levels' , 'course_date' , 'start_time' , 'end_time' , 'online' , 'type_courses_id' , 'collage_id' , 'status' , 'certificate' , 'maximum_attend' , 'live_url'];

    public function getSex() {
        if($this->sex == 1) {
            return "<span class='text-dark'><i class='fa fa-male event-icon'></i> male</span>";
        } elseif($this->sex == 2) {
            return "<span class='text-dark'><i class='fa fa-female event-icon'></i> female</span>";
        } else {
            return "<span class='text-dark'><i class='fa fa-male event-icon'></i> - <i class='fa fa-female event-icon'></i> Male - Female</span>";
        }
    }

    public function getOnline() {
        return $this->online == 1 ? "<span class='text-muted'>Online</span>" : "<span class='text-muted'>Offline</span>";
    }

    public function getCertificate() {
        return $this->certificate == 1 ? "<span class='text-danger'>Yes</span>" : "<span class='text-danger'>No</span>";
    }

    public function getLevels() {
        if($this->levels == 1) {
            return "<span>Beginner</span>";
        } elseif($this->levels == 2) {
            return "<span>Intermediate</span>";
        } else {
            return "<span>Advanced</span>";
        }
    }

    public function admins() {
        return $this->belongsTo(Admins::class , 'admins_id');
    }

    public function speakers() {
        return $this->belongsTo(Speakers::class , 'speaker_id');
    }

    public function courseDate() {
         if(Carbon::parse($this->course_date) > Carbon::now()) {
            return "<span class='text-success'>Not Finish</span>" . ' | ' . $this->start_time;
         } else {
             return "<span class='text-danger'>Finish</span>"  . ' | ' . $this->end_time;
         }
    }

    public function getStatus() {
        if($this->status) {
            return "<span class='text-success'>
                        <i class='fa fa-check-circle' aria-hidden='true'></i> Published
                    </span>";
        } else {
            return "<span class='text-success'>
                        <i class='fa fa-ban' aria-hidden='true'></i> Un Published
                    </span>";
        }
    }

    public function typeCourses() {
        return $this->belongsTo(Type_courses::class , 'type_courses_id');
    }

    public function collage() {
        return $this->belongsTo(Collages::class , 'collage_id');
    }

    public function usersCourses() {
        return $this->belongsToMany(User::class , 'users_courses' , 'courses_id' , 'users_id');
    }
}
