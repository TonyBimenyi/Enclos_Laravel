<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dep;


class list_depenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dep = dep::all();
        return view('list_depense.index',[
            'dep'=>$dep
        ]);
    }
    public function searchDepense(){
        $search_text = $_GET['type'];
        $search_text1 = $_GET['classe'];
        $search_text2 = $_GET['yess'];
        $search_text3 = $_GET['date'];
        $dep = dep::where('type_depense','LIKE','%'.$search_text.'%')
        ->where('description_depense','LIKE','%'.$search_text1.'%')
        ->where('date_depense','>=',$search_text2)
        ->where('date_depense','<=',$search_text3)/*->where('date_revenu','LIKE','%'.$search_text3.'%','<=',$search_text3)*/
        ->get();
        return view('list_depense.index',compact('dep'));
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
    public function edit(dep $dep)
    {
        return view('list_depense.edit')->with('dep',$dep);
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
        $dep = dep::where('id','=','$id')->update([
            'type_depense'=>$request->input('type'),
            'montant_depense'=>$request->input('montant'),
            'description_depense'=>$request->input('description'),
            'date_depense'=>$request->input('date'),
            'type_revenu'=>'0',
            'montant_revenu'=>'0',
            'description_revenu'=>'0',
            'date_revenu'=>'2000-10-10',
            'statut'=>'0',
            'reserve'=>'0',
            'date_enregistrement'=>$request->input('date'),
        ]);
        return redirect('/list_depense');
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
