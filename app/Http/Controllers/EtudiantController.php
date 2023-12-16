<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
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
        // dd($request);
        $validatdata = $request->validate([
            'nom_prenom' => '',
            'numero_telephone' => '',
            'numero_whatsapp' => '',
            'photo_visage' => 'string',
            'photo_visage' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'race' => '',
            'keri' => '',
            'keribour' => '',
            'keri_du_pere' => '',
            'keribour_du_pere' => '',
            'village_natal' => '',
            'niveau_etudes' => '',
            'option_etude' => '',
            'ecole_universite' => '',
            'annee_arrivee'=> '',
        ]);

        //$user = User::create($validatdata);

        $imageName = Str::lower(str_replace(' ', '_', $request->nom_prenom)).'.'.$request->photo_visage->extension();

        $request->photo_visage->move(public_path('images'), $imageName);
        dd($imageName);

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
