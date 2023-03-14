<?php
include_once __DIR__ . "/helpers.php";

// SPRENDIMAS: 
// Beje, nežinau ar pastebėjai, bet užduotyje pagal aprašymą supainiotas masyvų turinys (books'uose yra autoriai, autoriuose - books'ai). Teko taisyti :)
 
function booksAuthors(array $authors, array $books): array 
{
    $newArray = [];
    foreach($authors as $i => $key) {
        $newArray[$key] = $books[$i];
    };
    return $newArray;
};

$books = ['Odisėja', 'Drakula', 'Žiedų valdovas', 'Oliveris Tvistas', 'Moby-Dick', 'Marsietis'];
$authors = ['Homer', 'Bram Stoker', 'J. R. R. Tolkien', 'Charles Dickens', 'Herman Melville', 'Andy Weir'];

dump(booksAuthors($authors, $books));

// NU IR DAR VIENAS SPRENDIMAS :) 

function booksAuthors2(array $authors, array $books): array
{
    $newArray = [];
    for($i=0; $i<count($authors); $i++){
         $newArray[$authors[$i]]=$books[$i];
    }
    return $newArray;
};

dump(booksAuthors2($authors, $books));

// NA IR PAPRASČIAUSIAS SPRENDIMO BŪDAS.  :)

function booksAuthors3(array $authors, array $books): array
{
    return array_combine($authors, $books);
};

dump(booksAuthors3($authors, $books));

?>