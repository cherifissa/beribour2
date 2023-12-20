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
        return view('liste');
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
        $request->merge([
            'numero_telephone' => $request->t_indication . $request->numero_telephone,
            'numero_whatsapp' => $request->w_indication . $request->numero_whatsapp,
        ]);

        $validatdata = $request->validate([
            'nom_prenom' => 'required|string|min:12',
            'numero_telephone' => 'required|string|unique:users|min:12',
            'numero_whatsapp' => 'required|string|min:12',
            'photo_visage' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'race' => 'required|string',
            'keri' => 'required|string',
            'keribour' => 'required|string',
            'keri_du_pere' => 'required|string',
            'keribour_du_pere' => 'required|string',
            'village_natal' => 'required|string',
            'niveau_etudes' => 'required|string',
            'option_etude' => 'required',
            'ecole_universite' => 'required|string',
            'annee_arrivee' => 'required|date',
        ]);

        if ($request->hasfile('photo_visage')) {
            $file = $request->file('photo_visage');
            $extenstion = $file->getClientOriginalExtension();
            $imageName = Str::lower(str_replace(' ', '_', $request->nom_prenom));
            $filename = $imageName . '.' . $extenstion;
            $file->move('images', $filename);
            $validatdata['photo_visage']  = $filename;
        } else {
            return redirect()
                ->back()
                ->withErrors($validatdata)
                ->withInput();
        }

        $user = User::create($validatdata);

        if ($user) {
            return redirect()
                ->route('index')
                ->with('success', 'User created successfully');
        } else {
            return redirect()
                ->back()
                ->withErrors($validatdata)
                ->withInput();
        }
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
