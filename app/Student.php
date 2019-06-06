<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public function classes(){

        return $this->belongsTo(School_class::class, 'class_id');
    }

    public function student_subjects(){

        return $this->hasMany(Student_subject::class);

    }
}
