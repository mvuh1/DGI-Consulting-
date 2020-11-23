<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Flashy;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::all();
        //dd($formations[0]->intitule);
        
        return view('formations.index', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
           'intitule' => 'required',
           'date_debut' => 'required',
           'date_fin' => 'required',
           'description' => 'required',
       ]);
        $formation = new Formation;
       

       /* if($request->file()) {
            dd('entrer dans le if');
           $fileName = time().'_'.$request->file('image')->getClientOriginalName();
           $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');

           $formation->image = time().'_'.$request->file('image')->getClientOriginalName();

           $formation->image_path = '/storage/' . $filePath;

           $formation->intitule = $request->input('intitule');
           $formation->date_debut = $request->input('date_debut');
           $formation->date_fin = $request->input('date_fin');
           $formation->description = $request->input('description');
           $formation->save();
           return redirect()->route('formations.index');
       }
       else{
        dd('entrer dans le else');   
       } */
       $formation->intitule = $request->input('intitule');
       $formation->date_debut = $request->input('date_debut');
       $formation->date_fin = $request->input('date_fin');
       $formation->description = $request->input('description');
       $formation->save();

       //Flashy::message('Publié avec succès');

       return redirect()->route('formations.index');

   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Formation $formation)
    {
        return View('formations.show', compact('formation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Formation $formation)
    {
        //dd($formation);
        return View('formations.edit', compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)
    {
        if($request->file()) {
            dd('entrer dans le if');
           $fileName = time().'_'.$request->file('image')->getClientOriginalName();
           $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');

           $formation->image = time().'_'.$request->file('image')->getClientOriginalName();

           $formation->image_path = '/storage/' . $filePath;

           $formation->intitule = $request->input('intitule');
           $formation->date_debut = $request->input('date_debut');
           $formation->date_fin = $request->input('date_fin');
           $formation->description = $request->input('description');
           $formation->save();
           return redirect()->route('formations.index');
       }
       else{
        dd('entrer dans le else');   
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formation $formation)
    {
        $formation->delete();
        //Flashy::error('supprimé avec succès');

        return redirect()->route('formations.index');
    }
}
