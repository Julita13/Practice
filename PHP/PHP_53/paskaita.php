<?php 

// Sukuriamas storage link'as: 
// php artisan storage:link

// Daugiau apie jį
// https://laravel.com/docs/10.x/filesystem

// Pridedame migraciją create _movie_images_php. Parunniname ją
// Sukuriame modelį MovieImage

// Updatinam visą Movie klasę. 
// // Tada AdminMovieControlleryje į update funkciją įsidedame 
// $movie->customUpdate($request);
// return to_route('admin.movies.index');
// (ankstesni syncai jau iškeliavę į Movie modelį)
// Dabar įkelus porą failų ir update funkcijoje atlikus dd, turi ateiti įkelti paveiksliukai

// Next. Movies edit blade įsidedame pakoreguotą komponentą: 
// <x-forms.image-input :images="$movie->images" />
// Į app/View/Components/Forms ImageInput.php įkišame į constructą štai tokį dalyką: 
// public Collection $images; (+prisitraukiame Collection'ą)

// ir galiausiai įsidedam iš Mykolo githubo naują componentą į resources/views/components/forms/image-input.blade.php

// public/css/admin/form.css - sukuriame css dokumentėlį ir sukišame į jį Mykolo css iš github'o
// partialsuose prisitraukiame css link'ą head'o blade:
// <link rel="stylesheet" href="{{ asset('css/admin/form.css') }}">

//  public/js/admin/app.js /  įsikišame naują funkciją removeImage. ją taip pat įdedame į return'ą
//
// AdminMovieController create funkcijoje rašoma: 
// Movie::customCreate($request);
// (ankstesnio Movie::create jau nebereikia)
// Jį perkeliame į Movie modelį, sukurdami naują statinę funkciją: 
// public static function customCreate(Request $request) {
//     $movie = Movie::create($request->inputs());
// }
// Tada susikuriame naujas funkcijas: syncAll:
// public function syncAll($request):self{
//     $this->genres()->sync($request->get('genres'));
//     $this->countries()->sync($request->get('countries'));
//     $this->languages()->sync($request->get('languages'));
//     $this->actors()->sync($request->get('actors'));
//     return $this;
// }, 
// o iš customUpdate visą sync'ą iškerpame. Vietoj to, paupdate'iname customUpdate: prieš returną:
// $this->syncAll($request)->fill($request->input())->save();
// Sukuriame naują funkciją: insertImages, ištriname iš customUpdate'o visą collect'ą, jį sukišame į insertImages
// public function insertImages($images):self{
//     collect($images)->each(function (string $item, int $key) {
//         MovieImage::updateOrCreate([
//             'name' => $item,
//             'movie_id' => $this->id
//         ]);
//     });
//     return $this;
// }

//CustomCreate inicijuojame ją $this->insertImages($images);

// Tada movies create blade įpastiname: 
// <div class="form-group">
// <x-forms.image-input :images="$movie->images" />
// </div>

// Movie index blade įkišame prie nuotraukos: 
// <img width="100" src="{{ asset('storage/images/'.($movie->images[0]->name ?? "noimage.jpg"))}} ">



?>