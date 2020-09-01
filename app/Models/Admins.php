<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    protected $fillable = ['name' , 'email' , 'speaker_details' , 'password' , 'is_super'];
}
