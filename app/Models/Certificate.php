<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = ['courses_id' , 'users_id' , 'created_at'];
    public $timestamps = FALSE;
}
