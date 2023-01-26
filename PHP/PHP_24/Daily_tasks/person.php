<?php
declare(strict_types=1);
include_once __DIR__ . "/helpers.php";

class Person
{
    public function __construct(private string $name, private string $surname)
    {
        echo "This person is called $this->name $this->surname";
    }
}

/*
Paredaguokite klasę Person, kad veiktų šis kodas:
$person = new Person('John', 'Smith');
echo $person; // "This person is called John Smith"
*/

$person = new Person('John', 'Smith');

