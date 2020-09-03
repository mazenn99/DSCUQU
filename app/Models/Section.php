<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function Article() {
        return $this->hasMany(Articles::class , 'section_id');
    }
}
