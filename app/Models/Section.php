<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['name'];
    public $timestamps = FALSE;
    public function Article() {
        return $this->hasMany(Articles::class , 'section_id');
    }
}
