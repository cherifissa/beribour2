<!doctype html>
<html data-theme="base-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css"
        integrity="sha256-bVyZIfO/mqUpxEqOy4Bp2Txd9+/PUl57uCMeUSeb9t4=" crossorigin="anonymous" />
</head>

<body>
    {{-- Navbar --}}
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Homepage</a></li>
                    <li><a>Portfolio</a></li>
                    <li><a>About</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-center">
            <a class="btn btn-ghost text-xl">BERIBOUR 228</a>
        </div>
        <div class="navbar-end">
            <button class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
            <button class="btn btn-ghost btn-circle">
                <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="badge badge-xs badge-primary indicator-item"></span>
                </div>
            </button>
        </div>
    </div>
    {{-- carersoul --}}
    <div class="hero min-m-screen"
        style="background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi
                    exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
            </div>
        </div>
    </div>


    <div class="relative  flex-col justify-center h-screen overflow-hidden">
        <div class="w-full p-6 m-auto  rounded-md shadow-md ring-2 ring-gray-800/50 lg:max-w-xl">
            <h1 class="text-3xl font-semibold text-center text-gray-700">BERIBOUR 228</h1>
            <form class="space-y-4">
                <div class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Entrez votre nom et prénom </span>
                    </div>
                    <div class="flex">
                        <input type="text" name="name" placeholder="Nom & Prénom"
                            class="w-full input input-bordered" />
                    </div>
                </div>
                <div class=" w-full">
                    <div class="label">
                        <span class="label-text">Entrez votre numero de telephone </span>
                    </div>
                    <div class="flex">
                        <select class="select select-bordered join-item" onchange="updateImage()">
                            <option value="+228"
                                style="background-image: url('{{ asset('images/togo.png') }}'); background-repeat: no-repeat; padding-left: 20px;">
                                +228</option>
                            <option value="+235"
                                style="background-image: url('{{ asset('images/togo.png') }}'); background-repeat: no-repeat; padding-left: 20px;">
                                +235</option>
                        </select>
                        <div class="w-full">
                            <input type="number" name="name" placeholder="99XXXXXX"
                                class="w-full input input-bordered" />
                        </div>
                    </div>
                </div>
                <div class=" w-full">
                    <div class="label">
                        <span class="label-text">Entrez votre numero (whatsapp) </span>
                    </div>
                    <div class="flex">
                        <select class="select select-bordered join-item" ">
                            <option value="+228"
                                style="background-image: url('{{ asset('images/togo.png') }}'); background-repeat: no-repeat; padding-left: 20px;">
                                +228</option>
                            <option value="+235"
                                style="background-image: url('{{ asset('images/togo.png') }}'); background-repeat: no-repeat; padding-left: 20px;">
                                +235</option>
                        </select>
                        <div class="w-full">
                            <input type="number" name="name" placeholder="99XXXXXX"
                                class="w-full input input-bordered" />
                        </div>
                    </div>
                </div>
                <div>
                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text">Photo de visage clair </span>
                        </div>
                        <input type="file" class="file-input file-input-bordered w-full " />
                    </label>
                </div> <div>
                    <label class="form-control w-full ">
                        <div class="label">
                            <span class="label-text">Photo de visage clair </span>
                        </div>
                        <input type="file" class="file-input file-input-bordered w-full " />
                    </label>
                </div>


                <div>
                    <label class="label">
                        <span class="text-base label-text">Confirm Password</span>
                    </label>
                    <input type="password" placeholder="Confirm Password" class="w-full input input-bordered" />
                </div>
                <div>
                    <button class="btn btn-block">Sign Up</button>
                </div>
                <span>Already have an account ?
                    <a href="#" class="text-blue-600 hover:text-blue-800 hover:underline">Login</a></span>
            </form>
        </div>
    </div>

    {{-- footer --}}
    {{-- <footer class="footer footer-center p-4 bg-base-300 text-base-content">
        <aside>
            <p>Copyright © 2023 - All right reserved by ACME Industries Ltd</p>
        </aside>
    </footer> --}}
</body>

</html>
