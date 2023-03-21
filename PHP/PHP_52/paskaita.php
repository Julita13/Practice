<?php 
// Update'inamas actors full_name su mutatoriumi: 
// Actor modelyje pridedama nauja funkcija: 

// protected function fullName(): Attribute
//     {
//         return Attribute::make(
//             get: fn (mixed $value, array $attributes) =>  $attributes['first_name'] . $attributes['last_name'],
//         );
//     }

// Edit blade pakoreguojame aktorių :optionName="'full_name'"
// Ir viskas veikia :)


// DELETE funkcionalumas: 
// Public'e kuriame 2 naujus folderius: CSS ir JS. Kiekviename jų darome dar po 2 folderius: admin ir front
// js/admine kuriame app.js failiuką. Ir jame vyksta magija: :)

// Rašomės funkcijas. Prie viso šito į head'o blade'ą įdedame: (3 eilutė)
// <meta name="csrf-token" content="{{ csrf_token() }}">

// Dar: resources/views/movies/index blade idedame klasę delete (52 eilutėje)
// class="dropdown-item delete
// Į partials javascripts įmetame scripto pritraukimą: 
// <script src="{{asset('js/admin/app.js')}}"></script>
// Ir dar movies/index bladee įkišam tokį dalyką į 51 eilutę

// onclick="event.preventDefault()"

// Ir galiausiai paaupdate'iname AdminMovieControlleryje destroy funkcija

// Iš Javascripts ištriname funkciją ir perkeliame ją į ajax 




// 2 DALIS: IMAGE UPLOAD!
// Kuriame naują componentą: 
// php artisan make:component Forms/ImageInput
// Iš resources movies/edit blade'o iškerpam upload'o dalį ir įkopijuojame jį į resources/views/components/forms
// O pačiame edit'e įkišame 
                // <div class="form-group">
                //     <x-forms.image-input/>
                // </div>

// Į javascripts'ų blade'ą įsidedam naują scriptą, 
// <script src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
// į APP.JS įsidedame naują constantą: 
// const inputInit = () => {
//     bsCustomFileInput.init();   
// }

// Komponente viską pasimodifikuojame.
// AdminMovieControlleryje padarom dd update'e: dd($request->all());
// į movies.edit'o ir create'o blade'us po post metodo įkišame šitai: (10 eilutėje)
// enctype="multipart/form-data"
// Reikia nepamiršti image-input.blade prie name'o attributo pridedame tuščią masyvą name="images[]"
// AdminMovieControlleryje update'e sukūriame štai tokį gėrį:
// Movie::imageUpload($request);

// Movie modelyje sukuriame naują funkciją: 
// public static function imageUpload(Request $request){
//     dd($request);
// }

// 