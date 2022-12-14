<?php
// STRINGS
// Viengubos kabutės. Tekstas atvaizduojamas toks, koks parašomas tarp kabučių, išskyrus 
// escapint kabutes arba slash \` ir \\. Php supranta stringą nuo kabučių iki kabučių. Norint parašyti kabutes, prieš jas reikia uždėti \. 
// Kad parodytų slash'ą (\) - reikia trigubo \\\

// $phpString = "PHP is \"awesome\"";
// $phpString = "Php is \\\"awesome\"";
// echo($phpString);

 
// $name = "Julita";
// // echo "My name is $name";
// $statement = $name .  " " . "likes pizza!";
// echo $statement;

// Dvigubos kabutės. "Parsinamos" - skaidomas ir analizuojamas. Galima rašyti kintamuosius į stringą.
$language = "JS";
$array = ["PHP", "JS", "CSS"];
$assocArray = [
    "make" => "VW",
    "model" => "Passat",
    "year" => 1999,
];


// ESCAPE SEQUENCES

// \' – To escape ' within the single-quoted string.
// \” – To escape “ within the double-quoted string.
// \\ – To escape the backslash.
// \$ – To escape $.
// \n – To add line breaks between strings.
// \t – To add tab space.
// \r – For carriage return.


// $food = "hotdog";
// $statement = "I love {$language} and {$food}";
// $statement2 = "I hate {$array[2]} and {$food}";
// $statement3 = "I hate {$assocArray["make"]} and $food";
// $statement4 = "I hate $assocArray[model] and $food"; // tas pats, kas ir in previous line
// echo ($statement4);



?>