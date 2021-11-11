<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\minerval;
use App\Models\dep;
use App\Models\revenus;
use App\Models\repport;


class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $minerval = minerval::all()->sortBy('nom');
        return view('fees.index',['minerval'=>$minerval]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $minerval = minerval::create([
            'nom'=>$request->input('nom'),
            'prenom'=>$request->input('prenom'),
            'section'=>$request->input('section'),
            'classe'=>$request->input('classe'),
            'montant'=>$request->input('montant'),
            'trimestre'=>$request->input('trimestre'),
            'date_paiement'=>$request->input('date_naissance'),
            'statut'=>'1',
            'reserve'=>'0'
        ]);
       $revenus = revenus::create([
            'type_revenu'=>'Minerval',
            'montant_revenu'=>$request->input('montant'),
            'description_revenu'=>$request->input('prenom'),
            'date_revenu'=>$request->input('date_naissance'),
            'user'=>$request->input('user'),
            'minerval_id'=>$minerval->id,
            'statut'=>'0',
            'statut_stat'=>'0',

        ]);
        $repport = repport::create([
            'type_revenu'=>'Minerval',
            'montant_revenu'=>$request->input('montant'),
            'description_revenu'=>$request->input('prenom'),
            'date_revenu'=>$request->input('date_naissance'),
            'type_depense'=>'0',
            'montant_depense'=>'0',
            'description_depense'=>'0',
            'date_depense'=>'2000-10-10',
            'statut'=>'0',
            'reserve'=>'0',
            'depense_id'=>'1',
            'revenu_id'=>$revenus->id,
            'minerval_id'=>$minerval->id,
        ]);
        return redirect('fees/');
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
        $minerval = minerval::findOrFail($id);
        return view('fees.edit', compact('minerval'));

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
        $minerval = minerval::where('id','=',$id)->update([     'nom'=>$request->input('nom'),

            'prenom'=>$request->input('prenom'),
            'section'=>$request->input('section'),
            'classe'=>$request->input('classe'),
            'montant'=>$request->input('montant'),
            'trimestre'=>$request->input('trimestre'),
            'date_paiement'=>$request->input('date_naissance'),
            'statut'=>'1',

        ]);
        $revenus = revenus::where('minerval_id','=',$id)->update([
            'montant_revenu'=>$request->input('montant'),
            'description_revenu'=>$request->input('prenom'),
            'date_revenu'=>$request->input('date_naissance'),
            'user'=>$request->input('user'),
            'statut'=>'0',
            'statut_stat'=>'0',

        ]);
        $repport = repport::where('minerval_id',$id)->update([
            'montant_revenu'=>$request->input('montant'),
            'description_revenu'=>$request->input('prenom'),
            'date_revenu'=>$request->input('date_naissance'),
        ]);
        return redirect('fees/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        minerval::find($id)->delete();
        revenus::where('minerval_id',$id)->delete();
        repport::where('minerval_id',$id)->delete();
        return redirect('fees/')->with('yess');
    }
}
