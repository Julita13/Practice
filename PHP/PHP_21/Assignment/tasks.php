<?php 

// 1. Parašyti 2 failus - add_user_form.php ir add_user.php. 
// 2. Add add_user_form.php yra forma su įvesties laukeliais vartotojo duomenims: 
//     first_name 
//     last_name 
//     age 
//     country 
// 3. forma POST metodu siunčia duomenis į add_user.php. 
// 4. add_user.php patikrina ar duomenys suvesti ir įrašo(papildo jei yra duomenų) į failą json formatu - users.json. 
// Jei duomenys nesuvesti, grąžinama atgal į formą su klaidų žinute. 
// 5.  add_user_form.php puslapyje, virš formos, spausdinama vartotojų, kurie jau yra įvesti duomenys. 
// Spausdinama blokais, html dėstoma eile. 
 
// P.S. šiai užduočiai atlikti galima sukurti ir papildomų failų. 