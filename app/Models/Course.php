<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name', 'certificate', 'thumbnail', 'type', 'status', 'price', 'level', 'description'
    ];

    public function mentors() {
        return $this->belongsTo('App\Models\Mentor');
    }

    public function chapters() {
        return $this->hasMany('App\Models\Chapter')->orderBy('id', 'ASC');
    }

    public function imageCourses() {
        return $this->hasMany('App\Models\ImageCourse')->orderBy('id', 'DESC');
    }
}
