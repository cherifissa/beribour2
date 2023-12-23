@extends('layouts.layouts')

@section('hero')
    <h1 class="mb-5 text-4xl font-bold ">Beribours +228</h1>
    <p class="mb-5 text-slate-300 ">Liste des
        élèves, étudiants
        Beribours
    </p>
@endsection

@section('content')
    <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 justify-between p-1 ">


        <div class="card bg-base-300 shadow-xl m-1 d-flex justify-center items-center mt-3">
            <figure class="h-70 w-60 max-h-60 max-w-60 ">
                <img class="mask mask-squircle mt-6" src="{{ asset('images/mht_cherif_issa.jpg') }}" alt="Album" />
            </figure>
            <div class="card-body">
                <h2 class="card-title uppercase">Mahamat Cherif Issa</h2>

                <div class="join join-vertical w-full">
                    <div class="collapse collapse-arrow join-item border border-base-300">
                        <input type="radio" name="my-accordion-4" />
                        <div class="collapse-title text-xl font-medium">
                            Informations Personnelles
                        </div>
                        <div class="collapse-content">
                            <p>M1 à Esgis</p>
                            <p>Promotion: 2020</p>
                            <p>Dandasourara, Ourdi Keri</p>
                            <p>Teboura keribour, Ouhira Keribour</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow join-item border border-base-300">
                        <input type="radio" name="my-accordion-4" />
                        <div class="collapse-title text-xl font-medium">
                            Informations du pere
                        </div>
                        <div class="collapse-content">
                            <p>Dandasourara, Ourdi Keri</p>
                            <p>Teboura keribour, Ouhira Keribour</p>
                        </div>
                    </div>
                    <div class="collapse collapse-arrow join-item border border-base-300">
                        <input type="radio" name="my-accordion-4" />
                        <div class="collapse-title text-xl font-medium">
                            Contacts
                        </div>
                        <div class="collapse-content">
                            <p>Numero tel, 0000000</p>
                            <p>Numero what, 0000000</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>



    </div>
@endsection
