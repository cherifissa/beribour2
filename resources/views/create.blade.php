@extends('layouts.layouts')

@section('content')
    <div class="relative  flex-col justify-center  overflow-hidden">
        <div class="w-full p-6 m-auto  rounded-md shadow-md ring-2 ring-gray-800/50 lg:max-w-xl">
            <form class="space-y-4" id="myform" action="{{ route('beribours.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Entrez votre nom et prénom </span>
                    </div>
                    <div class="flex">
                        <input type="text" name="nom_prenom" placeholder="Nom & Prénom"
                            class="w-full input input-bordered" value="{{ old('nom_prenom') }}" />
                    </div>
                    @error('nom_prenom')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror

                </div>
                <div class=" w-full">
                    <div class="label">
                        <span class="label-text">Entrez votre numero de telephone </span>
                    </div>
                    <div class="flex">
                        <select class="select select-bordered join-item" name="t_indication">
                            <option value="+228" {{ old('t_indication') == '+228' ? 'selected' : '' }}>
                                +228</option>
                            <option value="+235" {{ old('t_indication') == '+235' ? 'selected' : '' }}>
                                +235</option>
                        </select>
                        <div class="w-full">
                            <input type="number" name="numero_telephone" placeholder="99XXXXXX"
                                class="w-full input input-bordered" value="{{ substr(old('numero_telephone'), 4) }}" />
                        </div>

                    </div>
                    @error('numero_telephone')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class=" w-full">
                    <div class="label">
                        <span class="label-text">Entrez votre numero (whatsapp) </span>
                    </div>
                    <div class="flex">
                        <select class="select select-bordered join-item" name="w_indication">

                            <option value="+235" {{ old('w_indication') == '+228' ? 'selected' : '' }}>
                                +235</option>
                            <option value="+228" {{ old('w_indication') == '+228' ? 'selected' : '' }}>
                                +228</option>
                        </select>
                        <div class="w-full">
                            <input type="number" name="numero_whatsapp" placeholder="99XXXXXX"
                                class="w-full input input-bordered" value="{{ substr(old('numero_whatsapp'), 4) }}" />
                        </div>

                    </div>
                    @error('numero_whatsapp')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div>
                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text">Photo de visage clair </span>
                        </div>
                        <input type="file" name="photo_visage" id="photo_visage"
                            class="file-input file-input-bordered w-full " accept="image/*" />

                    </label>
                    @error('photo_visage')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Votre Race ? </span>
                    </div>
                    <div class="flex">
                        <input type="text" name="race" placeholder="Race" class="w-full input input-bordered"
                            value="{{ old('race') }}" />
                    </div>
                    @error('race')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Votre Keri ? </span>
                    </div>
                    <div class="flex">
                        <input type="text" name="keri" placeholder="Keri" class="w-full input input-bordered"
                            value="{{ old('keri') }}" />
                    </div>
                    @error('keri')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Votre Keribour ? </span>
                    </div>
                    <div class="flex">
                        <input type="text" name="keribour" placeholder="Keribour" class="w-full input input-bordered"
                            value="{{ old('keribour') }}" />
                    </div>
                    @error('keribour')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Keri du pere ? </span>
                    </div>
                    <div class="flex">
                        <input type="text" name="keri_du_pere" placeholder="Keri du pere"
                            class="w-full input input-bordered" value="{{ old('keri_du_pere') }}" />
                    </div>
                    @error('keri_du_pere')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Keribour du pere ? </span>
                    </div>
                    <div class="flex">
                        <input type="text" name="keribour_du_pere" placeholder="Keribour du pere"
                            class="w-full input input-bordered" value="{{ old('keribour_du_pere') }}" />
                    </div>
                    @error('keribour_du_pere')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Village natal (ça peut être différent du village parental) </span>
                    </div>
                    <div class="flex">
                        <input type="text" name="village_natal" placeholder="Village natal"
                            class="w-full input input-bordered" value="{{ old('village_natal') }}" />
                    </div>
                    @error('village_natal')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Niveau d'études actuel </span>
                    </div>
                    <div class="flex">
                        <select class="select select-bordered w-full" name="niveau_etudes">
                            <option value="">Niveau d'études </option>
                            <option value="L1">Premiere année </option>
                            <option value="L2">Deuxieme année </option>
                            <option value="L3">Licene </option>
                            <option value="M1">Master 1 </option>
                            <option value="M2">Master 2 </option>

                        </select>
                    </div>
                    @error('niveau_etudes')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Filiere ou specialité d'étude </span>
                    </div>
                    <div class="flex">
                        <input type="text" name="option_etude" placeholder="Option d'étude"
                            class="w-full input input-bordered" value="{{ old('option_etude') }}" />
                    </div>
                    @error('option_etude')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">École/Université actuelle </span>
                    </div>
                    <div class="flex">
                        <input type="text" name="ecole_universite" placeholder="École/Université actuelle"
                            class="w-full input input-bordered" value="{{ old('ecole_universite') }}" />
                    </div>
                    @error('ecole_universite')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Année d'arrivée à Lomé</span>
                    </div>
                    <div class="flex">
                        <input type="date" name="annee_arrivee" class="w-full input input-bordered"
                            value="{{ old('annee_arrivee') }}" />
                    </div>
                    @error('annee_arrivee')
                        <div class="label">
                            <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                        </div>
                    @enderror
                </div>


                <div>
                    <button class="btn btn-block hover:border-t-teal-400">Confirmer</button>
                </div>
                <span>Already have an account ?
                    <a href="#" class="text-blue-600 hover:text-blue-800 hover:underline">Login</a></span>
            </form>

        </div>
    </div>
@endsection
