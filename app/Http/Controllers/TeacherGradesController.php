<?php

namespace App\Http\Controllers;

use App\Student;
use App\Subject;
use App\School_Class;
use App\Student_subject;
use Illuminate\Http\Request;

class TeacherGradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $class = School_Class::where('user_id' , '=' , auth()->id())->first();

        $students = Student::where('class_id' , '=' , $class->id)->get();

        $subjects = Subject::all();


        return view('teacher.index', compact('students', 'subjects'));
    }

    public function showGrades($id){

        $grades = Student_subject::where('student_id' , $id)->get();

        return view('teacher.grades.showGrades' , compact('grades'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.grades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->status);

        $class = School_Class::where('user_id' , 2)->first()->id;

        $attributes = request()->validate([

            'student_id' => 'required' ,
            'grades' => 'required' ,
            'subject_id' => 'required' ,
            'grade_status' => 'required' ,

        ]);


        $attributes['school_class_id'] = $class;

        Student_subject::create($attributes);

        return redirect('/teacher');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
