<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admins extends Authenticatable
{
    protected $fillable = ['name' , 'email' , 'speaker_details' , 'password' , 'is_super'];

    public function Courses() {
        return $this->hasMany(Courses::class , 'admins_id');
    }
}
