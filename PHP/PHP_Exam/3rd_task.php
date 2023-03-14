<?php
include_once __DIR__ . "/helpers.php";

//SPRENDIMAS: 

function vowelChange(string $subject): string
{
    return str_replace(['a', 'ą', 'ę', 'e', 'ė', 'į', 'i', 'y', 'o', 'u', 'ū', 'ų'], '', $subject);
};

dump(vowelChange('Mykolas bėga per pievą'));
echo "\n";
dump(vowelChange('Julita šliaužia per lauką')) ;


?>