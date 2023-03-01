<?php
//https://www.php.net/manual/en/intro.pdo.php
//https://phpdelusions.net/pdo#why

require_once __DIR__ . '/Connection.php';
require_once __DIR__ . '/helpers.php';

$connection = (new Connection())->getConnection();
dump($connection);
/*
Kaip rašyi PDO užklausas

Yra 2 būdai atlikti PDO užklausą:
 
PDO::query() - kai užklausoje nėra kintamųjų
PDO:prepare() ir execute() - jei naudojamas bent vienas kintamasis viduje

Abiem atvejais reikia užbaigti su fetch() ar fetchAll() funkcija, kuri paima duomenis
*/

/*
1. Pavyzdys be kintamųjų
*/

// $movie = $connection->query('SELECT * FROM `movie_rentals`.`movies`')->fetchAll();
// dump($movie);

/*
2. Pavyzdys su kintamaisiais
a) Kaip rašyti negalima!!!
*/
// $title = "Titanic";
//injection
// $title = "' or 1=1--'";
// $titanic = $connection->query("SELECT * FROM `movie_rentals`.`movies` AS `m` WHERE `m`.`title` = '$title'")->fetchAll();

/*
2. Pavyzdys su kintamaisiais
b) Teisingas sql, naudojant placeholderius
*/

//SU :named placeholderiais
$sql = "SELECT 
            * 
        FROM `movie_rentals`.`movies` AS `m`
        WHERE `m`.`title` = :title OR `m`.`title` = :title2 LIMIT 1";

$stmt = $connection->prepare($sql);
$stmt->execute([
    'title2' => 'Titanic',
    'title' => 'Inception'
]);
//fetch grąžina 1 masyvą
$inception = $stmt->fetchAll();
// dd($inception);

// //SU ? placeholderiais
$sql = "SELECT 
            * 
        FROM `movie_rentals`.`movies` AS `m`
        WHERE `m`.`title` = ? AND `m`.`release_date` > ?";

$stmt = $connection->prepare($sql);
$stmt->execute([
    'Titanic',
    '1977-01-01'
]);

$inception = $stmt->fetch();

// dump($inception);

/*
Simbolis ? - pozicinis placeholderis. execute() metu paduodamas INDEXUOTAS 
masyvas su vertėmis, kurios bus įstatytos į placeholderių vietas.
Kuri vertė kur atsidurs, nurodo EILIŠKUMAS masyve ir ? EILIŠKUMAS iš kairės į
dešinę SQL sakinyje.

Simbolis :name (nebūtinai name, gali bet koks pavadinimas) - įvardintas placeholderis.
execute() metu paduodamas ASOCIJUOTAS  masyvas su raktais ir vertėmis,
kurios bus įstatytos į placeholderių vietas.
Kuri vertė kur atsidurs, nurodo masyvo RAKTŲ pavadinimai
kurie turės SUTAPTI su SQL sakinyje esančias įvardintais placeholderiais.
Eiliškumas nesvarbus.

Kuri ši šių pasirinkti? Abu variantai yra geri.
? - jautrūs eiliškumui, masyvo, kuris bus perduodamas
execute() vertės turės būt sudėtos eilės tvarka pagal tai, kaip ? sudėlioti SQL sakinyje.

:somename  - eiliškumui nejautrūs, bet masyvas, kuris bus perduodamas
execute() turės turėti raktus, kurie nurodys, kokiam placeholderiui vertė priklauso.

VIENU METU ABU NENAUDOJAMI!!!
*/


function getAllMovies(\PDO $connection): array
{
    return $connection->query('SELECT * FROM `movie_rentals`.`movies`')->fetchAll();
} 

function getSingleMovie(\PDO $connection, int $id): array|null
{
    $sql = 'SELECT * FROM `movie_rentals`.`movies` WHERE `id` = ? LIMIT 1';
    $stmt = $connection->prepare($sql);
    $stmt->execute([$id]);

    return $stmt->fetch() ?: null;
}

// dump(getAllMovies($connection));
// dump(getSingleMovie($connection, 1));
