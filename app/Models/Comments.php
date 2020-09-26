<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = ['users_id' , 'article_id' , 'content' , 'created_at'];
    public $timestamps = FALSE;

    public function users() {
        return $this->belongsTo(User::class , 'users_id');
    }


    public function checkUser() {
        if($this->users_id == '') {
            return 'ANONYMOUS';
        } else {
            return $this->users->name;
        }
    }

    public function articles() {
        return $this->belongsTo(Articles::class , 'article_id');
    }

}
