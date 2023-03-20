<?php 
use Psy\Command\EditCommand;

// Paskaitos metu pirmiausia buvo į migracijas įdėti 3 nauji failai: 
// alter_language_movie_table
// alter_genre_movie_table
// alter_country_movie_table


// Einam į resources/views/movie/Edit
// pridedame virš image tokį dalykėlį: 

// <x-forms.multi-relation-select/>

// Susikūriame naują component'ą: 
// php artisan make:component Forms/MultiRelationSelect

// // Paeditiname patį MultiRelationSelect'ą: 
// į public constructą įsidedame 
// public Model $model, 
// public string $tagName

// // Tada AdminMovieControlleryje paeditiname public function edit tokiu būdu

// // $genres = Genre:get();
// // return view('admin.movies.edit', compact('movie', 'genres')); 

// Paeditiname editą tokiu būdu: 
// <x-forms.multi-relation-select :tagName="'genres'" :model="$movie" :relationItems="$genres"/>

// Tada Multiselecte pakoreguojame konstruktorių: 
// public function __construct(
//     public Model $model, 
//     public Collection $relationItems,
//     public string $tagName
//     ) 
//     {}

// Po to varom į Multiselect'o blade'ą, ten ji pakoreguojame tokiu būdu:
// Pridedame select'ą 

// <select id="" name="{{$tagName}}[]" multiple >
    
//     @foreach($relationItems as $relationItem)
//         <option>{{$relationItem->name}}</option>
//     @endforeach


// </select> 

// Prisidedame į javascripts'ų blade'us. 
// Ten prisidedame script'ą: 

// {{-- Select2 --}}
// <script src="{{ asset('adminlte/plugins/select2/js/select2.full.min.js')}}"></script>
// ir į apačią 

//   //Initialize Select2 Elements    
//   $('.select2bs4').select2({theme: 'bootstrap4'})
// });

// Taip pat pridedame į HEAD'o partialus css ir bootstrap'o pritrauktus linkus 
// <!-- Select2 -->
// <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2/css/select2.min.css') }}">
// <link rel="stylesheet" href="{{ asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

// Galiausiai reikia sumatchinti kiekvieno žanro id su relation'o ID
// Tam tikslui MultiSelect'o klasėje kuriame naują metodą public function selected. 
// Prieš tai modifikuojame konstruktorius. Pasirašomas naujas vidus.

// Galiausiai AdminMovieControlleryje reikia pa'update'inti update funkciją
// $movie->genres()->sync($request->get('genres'));



?>