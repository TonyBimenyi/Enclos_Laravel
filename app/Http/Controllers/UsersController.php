<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $User = User::all();
        return view('users.index',['User'=>$User]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = "Ntibisa";
        if($request->input('password')==$request->input('confpassword')){

        $User = User::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('username'),
            'email_verified_at'=>$request->input('NULL'),
            'password'=> Hash::make($request['password']),
            'remember_token'=>$request->input('NULL'),
        ]);
        return redirect('/users');
        }else{
            return view('CreateUserError.index');
        }
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
        $User = User::findOrFail($id);
        return view('users.edit', compact('User'));
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
        if($request->input('password')==$request->input('confpassword')){

            $User = User::where('id','=',$id)->update([
                'name'=>$request->input('name'),
                'email'=>$request->input('username'),
                'email_verified_at'=>$request->input('NULL'),
                'password'=> Hash::make($request['password']),
                'remember_token'=>$request->input('NULL'),
            ]);
            return redirect('/users');
            }else{
                $message = "Ntibisa";
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('/users');
    }
}
