<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    public function Section() {
        return $this->belongsTo(Section::class , 'section_id');
    }


    public function Admin() {
        return $this->belongsTo(Admins::class , 'admins_id');
    }
}
