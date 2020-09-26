<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{
    public function Courses() {
        return $this->hasMany(Courses::class , 'speaker_id');
    }
}
