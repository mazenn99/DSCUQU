<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class attendCourses extends Model
{
    protected $fillable = ['courses_id' , 'hash' , 'created_at'];
    public $timestamps = FALSE;
}
