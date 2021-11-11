<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\repport;
use App\Models\revenus;


class RevenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revenus = revenus::all();
        return view('revenu.index',[
            'revenus'=>$revenus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('revenu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $revenus = revenus::create([
            'type_revenu'=>$request->input('type'),
            'montant_revenu'=>$request->input('montant'),
            'description_revenu'=>$request->input('description'),
            'date_revenu'=>$request->input('date'),
            'user'=>$request->input('user'),
            'statut'=>'0',
            'statut_stat'=>'0',
            'date_enregistrement'=>$request->input('date'),
        ]);


        $repport = repport::create([
            'type_revenu'=>$request->input('type'),
            'montant_revenu'=>$request->input('montant'),
            'description_revenu'=>$request->input('description'),
            'date_revenu'=>$request->input('date'),
            'type_depense'=>'0',
            'montant_depense'=>'0',
            'description_depense'=>'0',
            'date_depense'=>'2000-10-10',
            'statut'=>'0',
            'reserve'=>'0',
            'depense_id'=>'1',
            'revenu_id'=>$revenus->id,
        ]);

        return redirect('/list_revenu');
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
      //  return view('revenu.edit')->with('revenus',$revenus);
        $revenus = revenus::findOrFail($id);
    return view('revenu.edit', compact('revenus'));
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
        $revenus = revenus::where('id','=',$id)->update([
            'type_revenu'=>$request->input('type'),
            'montant_revenu'=>$request->input('montant'),
            'description_revenu'=>$request->input('description'),
            'date_revenu'=>$request->input('date'),
            'user'=>$request->input('user'),
            'statut'=>'0',
            'statut_stat'=>'0',

        ]);

        $repport = repport::where('revenu_id',$id)->update([
            'type_revenu'=>$request->input('type'),
            'montant_revenu'=>$request->input('montant'),
            'description_revenu'=>$request->input('description'),
            'date_revenu'=>$request->input('date'),
        ]);


        return redirect('list_revenu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        revenus::find($id)->delete();

        repport::where('revenu_id',$id)->delete();
        return redirect('/list_revenu');



    }
}
