<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = ['courses_id' , 'users_id' , 'created_at'];
    public $timestamps = FALSE;

    public function users() {
        return $this->belongsTo(User::class , 'users_id');
    }

    public function courses() {
        return $this->belongsTo(Courses::class , 'courses_id');
    }
}
