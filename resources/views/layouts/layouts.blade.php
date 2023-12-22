<!doctype html>
<html lang="fr" data-theme="base-100">

<head>
    <meta charset="utf-8">
    <title>+228</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-2406ce76.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">
    <script src="{{ asset('jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
</head>

<body>
    {{-- Navbar --}}
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0 class="btn btn-ghost btn-circle">
                    <img src="{{ asset('images/logo.jpg') }}" class="h-9 w-9 rounded-2xl " alt="">
                </div>
            </div>
        </div>
        <div class="navbar-center">
            <a href="" class="btn btn-ghost text-xl">BERIBOUR 228</a>
        </div>
        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-lg  dropdown-content mt-3 mr-20  z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>A Propos</a></li>
                    <li><a>Contact</a></li>
                </ul>
            </div>

        </div>
    </div>
    {{-- carersoul --}}
    <div class="hero min-m-screen"
        style="background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold ">+228</h1>
                <p class="mb-5 text-slate-300 ">Ce projet vise à collecter les informations nécessaires de chaque
                    étudiant ou
                    élève
                    résidant au Togo.
                    Pour faciliter la liaison et la mise en contact des Beribour, il a été convenu de créer un site web
                    qui facilite certaines tâches, comme la connaissance, la liaison ou la prise de contact avec un
                    proche ou un ancien (cadet du même domaine), afin de faciliter les recherches.</p>
            </div>
        </div>
    </div>

    @yield('content')

    {{-- footer --}}
    <footer class="footer footer-center p-4 bg-base-300 text-base-content">
        <aside>
            <p>Copyright © 2023 - All right reserved Cherif</p>
        </aside>
    </footer>



</body>

</html>
