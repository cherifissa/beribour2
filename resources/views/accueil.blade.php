@extends('layouts.layouts')

@section('hero')
    {{-- <h1 class="mb-5 text-4xl font-bold ">+228</h1> --}}
    <p class="mb-5 text-slate-200 text-xl line text-justify">Ce projet vise à collecter les informations nécessaires
        de chaque
        étudiant ou élève résidant au Togo. Pour faciliter la liaison et la mise en contact des Beribour, il a été convenu
        de créer un site web qui facilite certaines tâches, comme la connaissance, la liaison ou la prise de contact avec un
        proche ou un ancien (cadet du même domaine), afin de faciliter les recherches.</p>
@endsection

@section('content')
    <p class="text-center text-xl ">Album photo</p>
    <div class="carousel carousel-center  p-4 space-x-4 bg-neutral rounded-box">
        @php
            $a = 1;
            $i = 13;
        @endphp
        @while ($a < $i)
            <div class="carousel-item ">
                <img src="{{ asset("images/sliders/photo{$a}.jpg") }}" class="rounded-box"
                    style="object-fit: cover; width: 350px; height: 450px;" />
            </div>
            @php
                $a++;
            @endphp
        @endwhile
    </div>
    {{-- <p class="text-center text-xl ">Album photo 2</p> --}}
    {{-- center content of this div --}}



    <div class="d-flex justify-center items-center" style="display: flex; justify-content: center; align-items: center;">
        <img class="mask mask-decagon h-40 mt-8 " src="{{ asset('images/logo.jpg') }}" />
        <div class="stats shadow">

            <div class="stat">
                <div class="stat-title">Total d'inscrits</div>
                <div class="stat-value">89/250</div>
                <div class="stat-desc">21% de plus que le mois dernier</div>
            </div>

        </div>

    </div>
    <div class="join join-vertical w-full p-1 mt-6 ">
        <div class="collapse collapse-arrow join-item border border-base-300">
            <input type="radio" name="my-accordion-4" />
            <div class="collapse-title text-xl font-medium">
                Pourquoi ce projet ?
            </div>
            <div class="collapse-content">
                <p>Pour faciliter la liaison et la mise en contact des Beribour, sans se déplacer ou se prendre la tête en
                    recherchant</p>

            </div>
        </div>
        <div class="collapse collapse-arrow join-item border border-base-300">
            <input type="radio" name="my-accordion-4" />
            <div class="collapse-title text-xl font-medium">
                Comment s'inscrire ou voir la liste ?
            </div>
            <div class="collapse-content">
                <p>Pour cela, il faut cliquer <a class="link link-info" href="{{ route('beribours.create') }}"> ici</a></p>
                <p style="display: flex; align-items: center;" class="mt-2"> Ou cliquer sur l'icône
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mx-2 " fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg> en haut de l'écran choississez l'option s'ajouter à la liste ou l'option liste des beribours
                </p>
            </div>
        </div>
        <div class="collapse collapse-arrow join-item border border-base-300">
            <input type="radio" name="my-accordion-4" />
            <div class="collapse-title text-xl font-medium">
                À qui est destiné ce projet ?
            </div>
            <div class="collapse-content">
                <p>À tous les Beribours ayant étudié</p>
                <p>Étudiants ou élèves </p>
            </div>
        </div>

    </div>
@endsection
