<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'user_id', 'course_id', 'rating', 'note'
    ];

    public function courses() {
        return $this->belongsTo('App\Models\Courses');
    }
}