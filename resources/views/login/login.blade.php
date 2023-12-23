@extends('layouts.layouts')

@section('content')
    <div class="hero min-h-screen min-w-max  bg-base-200">
        <div class="hero-content flex-col ">
            <div class="text-center lg:text-left">
                <h1 class="text-4xl font-bold">Se connecter</h1>
                <p class="py-6">Provident et a id nisi.</p>
                @error('erreur')
                    <div class="label">
                        <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="card shrink-0 shadow-2xl bg-base-100">
                <form class="card-body" action="{{ route('loginaction') }}" method="POST">
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">ID</span>
                        </label>
                        <input type="text" placeholder="id" name="id" class="input input-bordered w-full"
                            required />
                        @error('id')
                            <div class="label">
                                <span class="label-text-alt text-red-500 ms-1">{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                    <div class="form-control mt-6">
                        <button class="btn btn-primary">Connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
