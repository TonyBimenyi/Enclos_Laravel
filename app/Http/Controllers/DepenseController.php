<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\repport;
use App\Models\dep;

class DepenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dep = dep::all();
        return view('depense.index',[
            'dep'=>$dep
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depense.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $depenses = dep::create([
            'type_depense'=>$request->input('type'),
            'montant_depense'=>$request->input('montant'),
            'description_depense'=>$request->input('description'),
            'date_depense'=>$request->input('date'),
            'user'=>$request->input('user'),
            'statut'=>'0',
            'statut_stat'=>'0',
            'date_enregistrement'=>$request->input('date'),
        ]);


        $repport = repport::create([
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
            'depense_id'=>$depenses->id,
            'revenu_id'=>'1'
        ]);
        return redirect('/list_depense');
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
        $dep = dep::findOrFail($id);
        return view('depense.edit', compact('dep'));
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
        $stats = dep::where('id','=',$id)->update([
            'type_depense'=>$request->input('type'),
            'montant_depense'=>$request->input('montant'),
            'description_depense'=>$request->input('description'),
            'date_depense'=>$request->input('date'),
            'statut'=>'0',
            'statut_stat'=>'0',
        ]);
        $repport = repport::where('depense_id',$id)->update([
            'type_depense'=>$request->input('type'),
            'montant_depense'=>$request->input('montant'),
            'description_depense'=>$request->input('description'),
            'date_depense'=>$request->input('date'),
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
        dep::find($id)->delete();

        repport::where('depense_id',$id)->delete();
        return redirect('/list_depense');
    }
}
