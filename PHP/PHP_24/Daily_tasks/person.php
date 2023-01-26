<?php
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";

class Person
{
    public function __construct(private string $name, private string $surname)
    {
    }

}

/*
Paredaguokite klasę Person, kad veiktų šis kodas:
$person = new Person('John', 'Smith');
echo $person; // "This person is called John Smith"
*/
