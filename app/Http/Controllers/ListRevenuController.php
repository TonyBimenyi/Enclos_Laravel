<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\revenus;

class ListRevenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revenus = revenus::all();
        return view('list_revenu.index',[
            'revenus'=>$revenus
        ]);
    }
    public function search(){
        $search_text = $_GET['type'];
        $search_text1 = $_GET['classe'];
        $search_text2 = $_GET['yess'];
        $search_text3 = $_GET['date'];
        $revenus = revenus::where('type_revenu','LIKE','%'.$search_text.'%')
        ->where('description_revenu','LIKE','%'.$search_text1.'%')
        ->where('date_revenu','>=',$search_text2)
        ->where('date_revenu','<=',$search_text3)/*->where('date_revenu','LIKE','%'.$search_text3.'%','<=',$search_text3)*/
        ->get();
        return view('list_revenu.index',compact('revenus'));
      /*  $search_text1 = $_GET['classe'];
        $revenus = revenus::where('description_revenu','LIKE','%'.$search_text1.'%')
        ->get();*/

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
