<?php

namespace App;

use App\Models\Courses;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','sex' , 'subscription'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getSex() {
        if($this->sex) {
            return "<i class='fa fa-male event-icon'></i>";
        } else {
            return "<i class='fa fa-female event-icon'></i>";
        }
    }

    public function usersCourses() {
        return $this->belongsToMany(Courses::class , 'users_courses' , 'users_id' , 'courses_id');
    }

}
