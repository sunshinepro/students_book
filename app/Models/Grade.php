<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    public $fillable = ['lecture_id', 'student_id', 'grade'];

    public function lectures(){
        return $this->belongsTo('App\Models\Lecture');
    }

    public function students(){
        return $this->belongsTo('App\Models\Student');
    }
}