<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School_Class extends Model
{

    protected $table = 'school_classes';

    public function class_students(){

        return $this->hasMany(Student::class);

    }
}
