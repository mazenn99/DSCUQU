<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{
    protected $fillable = ['name' , 'overview' , 'twitter' , 'snap' , 'Instagram' , 'facebook' , 'photo'];
    public function Courses() {
        return $this->hasMany(Courses::class , 'speaker_id');
    }
}
