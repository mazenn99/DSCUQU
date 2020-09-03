<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{

    protected $fillable = [''];

    public function getSex() {
        if($this->sex == 1) {
            return "<span class='text-dark'><i class='fa fa-male event-icon'></i> male</span>";
        } elseif($this->sex == 2) {
            return "<span class='text-dark'><i class='fa fa-female event-icon'></i> female</span>";
        } else {
            return "<span class='text-dark'><i class='fa fa-male event-icon'></i> - <i class='fa fa-female event-icon'></i> Male - Female</span>";
        }
    }

    public function getOnline() {
        return $this->online == 1 ? "<span class='text-muted'>Online</span>" : "<span class='text-muted'>Offline</span>";
    }

    public function getCertificate() {
        return $this->certificate == 1 ? "<span class='text-danger'>Yes</span>" : "<span class='text-danger'>No</span>";
    }

    public function getLevels() {
        if($this->levels == 1) {
            return "<span>Beginner</span>";
        } elseif($this->levels == 2) {
            return "<span>Intermediate</span>";
        } else {
            return "<span>Advanced</span>";
        }
    }
}
