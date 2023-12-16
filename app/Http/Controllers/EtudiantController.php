<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $validatdata = $request->validate([
            'nom_prenom' => 'required',
            'numero_telephone' => 'required',
            'numero_whatsapp' => 'required',
            'photo_visage' => 'required',
            'race' => 'required',
            'keri' => 'required',
            'keribour' => 'required',
            'keri_du_pere' => 'required',
            'keribour_du_pere' => 'required',
            'village_natal' => 'required',
            'niveau_etudes' => 'required',
            'option_etude' => 'required',
            'ecole_universite' => 'required',
            'annee_arrivee'=> 'required',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
