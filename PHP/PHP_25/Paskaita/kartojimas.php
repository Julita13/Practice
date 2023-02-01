<?php

/*
Klasė ir objektas.
Klasė - instrukcija, pagal kurią kuriami objektai.

Objektas - duomenų tipas, duomenų struktūra, sukurtas pagal klasę.

Objektas dar vadinamas:
    Klasės atvejų/egzemplioriumi/instancija(instance)
    Instancijavus klasę, gauname objektą.

Terminai, reiškiantys objekto sukūrimą:
    Inicijuoti objektą,
    Sukurti klasės atvejį/egzempliorių/instanciją
    Instancijuoti klasę

Klasė viena, objektų iš jos galima sukurti daug ir visi
jie bus atskiri ir nepriklausomi, nors kurti pagal tą patį brėžinį.
*/

//Klasės aprašymas(definicija)/deklaravimas
class Plant
{
}
//Objekto inicijavimas/Klasės instancijavimas
$grass = new Plant();

// print_r($grass);

//Klasėje deklaruojamos objekto savybės(properties) ir metodai(methods)
class Building
{
    //Savybės
    public int $floors;
    public string $roof;

    //Metodai - tos pačios taisyklės, kaip ir funkcijos
    public function getFloors(): int
    {
        //Paimama objekto savybę floors
        return $this->floors;
    }
}

$apartment = new Building();

//Kai nenaudojam konstruktoriaus
//Priskiriam 
$apartment->floors = 12;
//Pakeičiam
$apartment->floors = 15;
//Rodom
echo $apartment->floors . PHP_EOL;

echo $apartment->getFloors() . PHP_EOL;

/*
Pseudokintamasis $this naudojamas objekto metoduose.
Reikalingas tam, kad objekto viduje būtų galima pasiekti 
ir naudoti jo paties savybes ir metodus.
Jis atsiranda tik tada, kai yra instacijuojama klasė,
ir egzistuoja pats objektas.
Galima naudoti tik neStatiniuose metoduose.
*/

//Konstruktorius senuoju būdu
class Planet
{
    public const PI = 3.14159;
    //Savybės
    public string $name;
    public string $type;
    public float $diameter;

    public float $circumference;
    public float $radius;
    //Konstruktorius priima parametrus, kurie gali būti panaudoti įvairiai
    //įskaitant ir priskyrimą objekto savybėms ar automatinį metodų paleidimą
    //Metodo parametrai
    public function __construct(string $title, float $diameter, string $type)
    {
        $this->name = $title;
        $this->diameter = $diameter;
        $this->type = $type;
        $this->setRadius()->setCircumference();
    }

    private function setRadius(): self
    {
        $this->radius = $this->diameter / 2;
        return $this;
    }

    private function setCircumference(): self
    {
        $this->circumference = $this->diameter * self::PI;
        return $this;
    }
}

$mars = new Planet('Marsas', 6779000, 'Telūrinė');

echo $mars->name . PHP_EOL;
echo $mars->type . PHP_EOL;
echo $mars->diameter . PHP_EOL;
echo $mars->circumference . PHP_EOL;
echo $mars->radius . PHP_EOL;

//Konstruktorius su property promotion - palengvina savybių deklaravimą ir verčių priskyrimą
class Transport
{
    //Konstruktorius priima parametrus ir iš karto deklaruoja bei priskiria savybėms
    //Atskirai rašyti priskyrimų nereikia,konstruktoriaus bloką galima naudoti pagal poreikį
    //Taip pat galima kombinuoti Promote savybes su įprastomis 

    protected string $makeModel;

    public function __construct(
        protected float $weight,
        protected string $type,
        protected string $make,
        protected string $model
    ) {
        $this->setMakeModel();
    }

    private function setMakeModel(): self
    {
        $this->makeModel = "{$this->model}/{$this->make}";
        return $this;
    }
    
    public function __toString(): string
    {
        return "Automobilis {$this->makeModel} yra '{$this->type}' tipo ir sveria {$this->weight}";
    }
}

$vectra = new Transport('1600', 'wagon', 'Opel', 'Vectra');
echo $vectra;