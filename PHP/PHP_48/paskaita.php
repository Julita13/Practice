<?php 

// MIGRACIJOS

// Migracijomis atliekamos duomenų bazės kūrimo ir keitimo procedūros. Migracijų failai yra database/migrations kataloge. 
// Migracijos - tai PHP failai, kuriuose yra Migracijų klasės. 

// Migracija turi turėti:
// -- up() metodą, kuris vykdomas migrate metu
// -- down(), kuris vykdomas rollback metu

// Pagrindinės komandos: 
// php artisan
// make:migration create_users_table - sukurti naują migracijos failą
// migrate - paleidžia naujas migracijas
// migrate:rollback - grąžina paskutinę migraciją
// migrate:refresh - grąžina visas migracijas ir migruoja iš naujo naujo
// migrate:fresh - numeta lenteles ir migruoja iš naujo

// Galima naudoti sąlygas kaip -step ir --seed. Pvz: php artisan migrate:refresh --seed


// Pavyzdžiai: 
// visas artisan komandas reiktų leisti šiame folderyje: 
// Vegita@MSI MINGW64 ~/Desktop/Julita/Practice/PHP/Laravel_Project/laravel (master)
// php artisan make:migration create_actors_table - sukuriama lentelė
// php artisan make:seeder MovieSeeder

// CTRL  + ALT + I - numeta namespace'ą naujai klasei, kurią mes norime naudoti

// php artisan db:seed MovieSeeder - seedina lentelę

// php artisan migrate:refresh - ištrina lenteles
// php artisan migrate - sukuria lentutes iš naujo
// php artisan migrate:refresh --seed - ištrina lentelės turinį

// https://github.com/Mykolas25/vigi38_movie_rentals.git

?>