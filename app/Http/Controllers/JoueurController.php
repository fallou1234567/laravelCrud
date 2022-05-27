<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\club;
use App\Models\joueur;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $club = Club::all();
        return view('joueur.index', compact('club'));
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
        //$now = date('d-m-Y H:i'); //Fomat Date and time
        // $now = date('d-m-Y'); //Fomat Date and time
        // $now = $request->date
        
        $joueur = new Joueur();
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->dateNaissance = $request->date;
        $joueur->club_id = $request->club;
        $joueur->save();
        return redirect('joueur.affiche');
    }

    public function liste()
    {
        $joueurs = Joueur::all();
        $num = 1;
        return view('joueur.affiche', compact('joueurs', 'num'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $joueur = Joueur::find($id);
        return view('joueur.show', compact('joueur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $joueur = Joueur::find($id);
        return view('joueur.edit',compact('joueur'));
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
        $joueur = Joueur::find($id);
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->dateNaissance = $request->date;
        $joueur->club_id = $request->club;
        $joueur->update();
        return redirect('joueur.affiche');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $joueur = Joueur::find($id);
        $joueur->delete();
        return redirect('joueur.affiche');
    }
}
