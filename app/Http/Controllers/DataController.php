<?php

namespace App\Http\Controllers;

use App\Student;
use App\Subject;
use App\School_Class;
use App\Student_subject;
use Illuminate\Http\Request;

class DataController extends Controller
{


        public function marks($mark){

            $students = Student::where('class_id', $mark)->get();

            return view('home', compact('students'));

        }

        public function showGrades($id){

            $grades = Student_subject::where('student_id' , $id)->get();

            return view('student.showGrades' , compact('grades'));

        }


        public function showClasses(){

            $classes = School_Class::all();

           return view('student.classes' , compact('classes'));

        }

        public function showStudents($id){

            $students = Student::where('class_id' , $id)->get();

            $subjects = Subject::all();

           return view('student.showStudents' , compact('students', 'subjects'));

        }




}
