<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_subject extends Model
{
    protected $table = 'students_subjects';

    protected $fillable = ['grades' , 'student_id', 'subject_id', 'grade_status', 'school_class_id'];

    public function Students(){

        return $this->belongsTo(Student::class , 'student_id');
    }

    public function Subjects(){

        return $this->belongsTo(Subject::class , 'subject_id');
    }

    public function Student_names(){

        return $this->hasMany(Student::class , 'student_id');
    }
}
