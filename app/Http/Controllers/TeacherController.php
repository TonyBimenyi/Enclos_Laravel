<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teacher.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $teacher = teacher::create([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'classe'=>$request->input('classe'),
            'cours'=>$request->input('cours'),
            'phone'=>$request->input('phone'),
            'adresse'=>$request->input('adresse'),
            'statut'=>'1',
            'reserve'=>'0'
        ]);
        return redirect('/list_teacher');
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
    public function edit(teacher $teacher)
    {
        return view('teacher.edit')->with('teacher',$teacher);
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
        $teacher= teacher::where('id','=',$id)->update([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'classe'=>$request->input('classe'),
            'cours'=>$request->input('cours'),
            'phone'=>$request->input('phone'),
            'adresse'=>$request->input('adresse'),
            'statut'=>'1',
            'reserve'=>'0'
        ]);
        return redirect('/list_teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        $teacher->delete();
        return redirect('/list_teacher');
    }
}
