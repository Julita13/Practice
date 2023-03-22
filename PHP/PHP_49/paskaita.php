<?php

// ROUTING:

// routes folderyje web.php dokumente kuriame naują Routą: 
// Route::get('/admin', [AdminHomeController::class, 'index']);

// Po to, App/Http/Controllers/Admin folderyje kuriame naują Controller'į
// Controller'io kūrimas: 
// php artisan make:controller Admin/AdminHomeController
// Pačiame AdminHomeControlleryje sukuriame funkciją. Prisitraukiame routes dokumente 
// mūsų naująjį Controllerį su CTRL+ALT+I funkcija. 
// Po šių veiksmų nuėjus į laravel_project.test/admin, matysime savo echo/funkcijos nurodomą turinį.
// Tada išsikviečiame funkcijoje return view('admin.home');
// Einame į resources/views. Sukuriame admin folderį, jame - home.blade.php dokumentą. 
// Kas bus jame parašyta, tą mes ir matysime. 

//          Naujo routo kūrimas: web.php puslapyje sukuriame Route'ą: 
//          Route::get('admin/movies', [AdminMovieController::class, 'index']);
//          Tada kūriame su AdminMovieController: 
//          php artisan make:controller Admin/AdminMovieController --resource
// 

// Kūriame naują modelį: 
// php artisan make:model Movie --controller --resource --requests
// Po to atsiranda modelis, controlleris ir requestas. 

// Po šių dalykų korekcijų, darome route'us visoms funkcijoms: index, show, create, update. 

// Komanda: 
// php artisan route:list -- tikrina visus routes. 

// php artisan make:controller Admin/AdminActorController --model=Actor --resource --requests
// php artisan make:controller Admin/AdminCountryController
// php artisan make:controller Admin/AdminCountryController --model=Country --resource --requests




// Po viso routing'o, einame į Models/Movie.php. 
// Ten susikuriame protected $fillable:
// protected $fillable = [
//     'title',
//     'release_date',
//     'rating',
//     'runtime',
//     'image',
//     'description',
// ];

// ir ten pat (Models/Movie.php) sukūriame sąryšį su kita lentele
// public function genres():BelongsToMany{
//     return $this->belongsToMany(Genre::class);
// }

// o tada AdminMovieController'yje updatiname public function index tokiu būdu: 

// public function index()
//     {
//         $movies = Movie::with('genres')->get();
//         dd($movies);
//     }

// public function index()
// {
//     $movies = Movie::get();
//     dd($movies[1]->countries);
// }

// Pa'use'inam Genre ir Belongs to Many

// Ir tada nuėjus į http://laravel_project.test/admin/movies,
//atsiranda relationship, kur pasirodo visi sąryšiai 

//  Padarom sąryšius su visom lentelėm; 
// ir nuejus į laravel_project.test/admin/movies turi rodyti aąryšį su ta lentute, kurią prisitraukėm 
// Movie class apvelkame visa customUpdate (iki returno) su šituo: 
// DB::transaction(function () use($request){
// Po to, įkėlus nuotraukas, jos atsiranda heidi movie_images lentelėje ir projekte - public/storage/images folderyje





?>