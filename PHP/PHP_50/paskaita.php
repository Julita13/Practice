<?php 

// Susiinstaliuojame savo folderyje štai tokį dalyką: 
// composer require "almasaeed2010/adminlte"
// Vendors atsiranda naujas almasaeed'o folderis. 

// Einame į AdminMovieController, index'e susikūriame return į view su reikiamu blade'u. 
// Tam resources/views/admin - padarom folderį admin, jame index.blade.Movies ir returnas atrodys taip: 
// return view('admin.movies.index', compact('movies')); 
// o index.blade.php parašom: {{dd($movies)}}

//  Tame pačiame resources/views/admin darom layouts folderį, jame dar vieną failą: 
// document.blade.php i į jį įkeliam visą css. 

// Ten pakeičiam visus include php į @include('admin.partials.footer')
// Nutriname galą (.php), į pradžią įdedam (admin.), "/" pakeičiam į taškus "."
// Admine įkeliam visus partialus, ten visų failų pavadinimuose įdedame "blade"
// Navigations  hrefuose, kur yra .php,  pakeičiame į "{{route('admin.home')}}"
// Sidebar'e irgi padarome identišką pakeitimą su .php (40 eilutė)

// Tada views/admin/movies/index.blade.php pritraukiam pagrindinį blade'ą: 
// @extends('admin.layouts.document'); 

// // Ten pat prisitraukiame section'us, 
// @section('content')
//     MOVIE CONTENT
// @endsection
// o layoutuose document blade.php pakeičiame content (36 eilutėje) į @yield('content')
// Tada į tą contentą įkopijuojame visą index.php atsiųstą Mykolo iš 46 paskaitos turinį.
// Ten pakeičiame foreach'o turinį (kaip faile) ir persikeičiam td į blade formatą
// Taip pat reikia persidaryti ahrefus pagal pavyzdį (index.blade.php)


// Kuriame create'ą AdminMovieControlleryje return view('admin.movies.create'); 
// Tą pati su extends ir sectionais padarome create.blade.php 
// Edit.blade.php: keičiame 11-12 eilutes į    
// @method('put')
// @csrf




?>