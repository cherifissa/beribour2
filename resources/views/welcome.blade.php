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

    <div class="relative  flex-col justify-center  overflow-hidden">
        <div class="w-full p-6 m-auto  rounded-md shadow-md ring-2 ring-gray-800/50 lg:max-w-xl">
            <form class="space-y-4" id="myform" action="{{ route('user.store') }}" method="POST"
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
                            <option value="+228">
                                +228</option>
                            <option value="+235">
                                +235</option>
                        </select>
                        <div class="w-full">
                            <input type="number" name="numero_telephone" placeholder="99XXXXXX"
                                class="w-full input input-bordered" value="{{ old('numero_telephone') }}" />
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
                            <option value="+235">
                                +235</option>
                            <option value="+228">
                                +228</option>
                        </select>
                        <div class="w-full">
                            <input type="number" name="numero_whatsapp" placeholder="99XXXXXX"
                                class="w-full input input-bordered" value="{{ old('numero_whatsapp') }}" />
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
                        <input type="file" name="photo_visage_crop" id="photo_visage_crop"
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
                        <input type="text" name="keribour" placeholder="Keribour"
                            class="w-full input input-bordered" value="{{ old('keribour') }}" />
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

            <div id="my_modal_1" class=" crop_image fixed inset-0 z-50 hidden overflow-auto bg-black bg-opacity-50">
                <div class="modal-box flex items-center justify-center h-full w-full">
                    <div class="p-8 mx-auto">
                        <div class="w-10 h-10 max-w-96" id="image_demo"></div>
                        <div class="flex justify-end">
                            <button id="closeModal" class="btn">Confirmer</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- footer --}}
    <footer class="footer footer-center p-4 bg-base-300 text-base-content">
        <aside>
            <p>Copyright © 2023 - All right reserved Cherif</p>
        </aside>
    </footer>

    <script>
        $(document).ready(function() {


            $('#photo_visage_crop').change(function() {

                $image_crop = $('#image_demo').croppie({
                    enableExif: false,
                    showZoomer: false,
                    enableZoom: true,
                    viewport: {
                        width: 360,
                        height: 360,
                        type: 'square'
                    },
                    boundary: {
                        width: 390,
                        height: 390
                    }
                });
                if ($image_crop) {
                    $image_crop.croppie('destroy');
                    $image_crop = $('#image_demo').croppie({
                        enableExif: false,
                        showZoomer: false,
                        enableZoom: true,
                        viewport: {
                            width: 360,
                            height: 360,
                            type: 'square'
                        },
                        boundary: {
                            width: 390,
                            height: 390
                        }
                    });
                }
                var reader = new FileReader();
                reader.onload = function(event) {

                    $image_crop.croppie('bind', {
                        url: event.target.result
                    }).then(function() {
                        console.log('jQuery bind complete');
                    });
                }

                reader.readAsDataURL(this.files[0]);
                $('#my_modal_1').removeClass('hidden');

            });

            $('.crop_image').click(function(event) {
                $image_crop.croppie('result', {
                    type: 'canvas',
                    size: 'viewport'
                }).then(function(response) {
                    var myForm = document.getElementById('myform');

                    var input = document.createElement('input');

                    // Set the type and name attributes of the input
                    input.type = 'hidden';
                    input.name = 'photo_visage';

                    // Set the value of the input to the base64 data
                    input.value = response;

                    myForm.appendChild(input);

                    $('#my_modal_1').addClass('hidden');

                })
            });


        });
    </script>

</body>

</html>
