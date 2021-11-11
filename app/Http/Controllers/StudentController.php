<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      return view('student.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = student::create([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'section'=>$request->input('section'),
            'classe'=>$request->input('classe'),
            'date_naissance'=>$request->input('date_naissance'),
            'lieu_naissance'=>$request->input('lieu'),
            'statut'=>'1',
            'reserve'=>'0'
        ]);
        return redirect('/list_student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        return view('student.edit')->with('student',$student);
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
        $student = student::where('id','=',$id)->update([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'section'=>$request->input('section'),
            'classe'=>$request->input('classe'),
            'date_naissance'=>$request->input('date_naissance'),
            'lieu_naissance'=>$request->input('lieu'),
            'statut'=>'1',
            'reserve'=>'0'
        ]);
        return redirect('/list_student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student->delete();
        return redirect('/list_student');
    }
}
