<?php

// TRANSLATIONS


// Paleidžiam: 
// php artisan lang:publish
// Atsiranda lang folderis. 
// Susikuriame kitos kalbos folderį. Abiejuose susikuriame po app.php. Abiejuose failuose bus grąžinamas masyvas. Sukuriame du returnus. 

// Tada views/movies/index'e pakeičiame du th (nuotrauką ir title) į 

// <th>{{__('app.image')}}</th>
// <th>{{__('app.title')}}</th>
// sukeičiame visus
// 


// Einame į config app. 85 eilutėje yra: 'locale' => 'lt',tai pakeičiame kalbą. 
// AdminMovieControlleryje reikia į index'ą įkišti norimos kalbos locale: 
// App::setLocale('lt');

// Galiausiai, app.lt pasitranslate'inam 
// return [
//     'image' => 'nuotrauka',
//     'title' => 'pavadinimas',
//     'release_date' => 'išleidimo data',
//     'description' => 'aprašymas',
//     'duration' => 'trukmė',
//     'rating' => 'reitingas',
//     'created_at' => 'sukurta',
//     'updated_at' => 'atnaujinta',
//     'actions' => 'veiksmai'
// ];

// ir dar indexe pridedame foreach'ines eilutes pvz žanrams. ir aktoriams 
// Viršuje ir apačioje pridedame po:

// <th>{{Str::ucfirst(trans('app.actors'))}}</th>
// ir foreachus
// Ir, aišku, reikia pridėti vertimus į vertimų failus.

// ir dar: aktorių editinimui tame pačiame blade'e 

// @foreach($movie->actors as $actor)
// <a href="{{route('admin.actors.edit', $actor)}}">
//     {{$actor->fullName ?? ''}}
// </a>
// @endforeach





// VALIDACIJOS
//į updateMovieRequest sukišame: į rules:  
// return [
//     'title' => 'required|max:255',
//     'release_date' => 'required|date',
//     'runtime' => 'required|numeric|max_digits:3',
// ];


// o į views admin/layouts document.blade.php 
// sukišame po content-container fluid: 


// @if ($errors->any())
//               <div class="alert alert-danger">
//                   <ul>
//                       @foreach ($errors->all() as $error)
//                           <li>{{ $error }}</li>
//                       @endforeach
//                   </ul>
//               </div>
//           @endif



// o į 

// Identiškas validacijas susidedame ir į storeMoviesRequest




?>