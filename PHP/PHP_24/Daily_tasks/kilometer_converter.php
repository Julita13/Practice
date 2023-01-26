<?php
include_once __DIR__ . "/helpers.php";

class KilometerConverter{
    public const NAUTICAL_MILE = 1.852; 
    public const MILE = 1.60934; 
    public const YARD = 0.0009144;
    public const CENTIMETER = 1.0E-5;
    public float $distance;

    public function __construct(float $distance) {
        $this->distance = $distance;
    }

    public function convertToNauticalMiles():float {
        return $this -> distance / self::NAUTICAL_MILE;
    }

    public function convertToMiles():float {
        return $this -> distance / self::MILE;
    }

    public function convertToYards():float {
        return $this -> distance / self::YARD;
    }
    public function convertToCentimeters():float {
        return $this -> distance / self::CENTIMETER;
    }

    public static function getConversionRates():array {
        return [
            "nautical_mile" => self::NAUTICAL_MILE,
            "mile" => self::MILE,
            "yard" => self::YARD,
            "centimeter" => self::CENTIMETER,
        ];
    }
};



$converter = new KilometerConverter(55);
// dump($converter);
dump($converter->convertToNauticalMiles() . " nautical miles" . PHP_EOL);
dump($converter->convertToMiles() . " miles" . PHP_EOL);
dump($converter->convertToYards() . " yards". PHP_EOL);
dump($converter->convertToCentimeters() . " cm". PHP_EOL);

dump(KilometerConverter::getConversionRates());



abstract class AbstractKilometerConverter {
    abstract public function convert(float $km): float;
}

class NauticalMileConverter extends AbstractKilometerConverter{
    private const NAUTICAL_MILE = 0.539956803;
    public function convert($km):float {
        return $km * self::NAUTICAL_MILE;
    }
}

class MileConverter extends AbstractKilometerConverter{
    private const MILE = 0.621;
    public function convert($km):float {
        return $km * self::MILE;
    }
}

class YardConverter extends AbstractKilometerConverter{
    private const YARD = 1093.6133;
    public function convert($km):float {
        return $km * self::YARD;
    }
}

class CentimeterConverter extends AbstractKilometerConverter{
    private const CENTIMETER = 100000;
    public function convert($km):float {
        return $km * self::CENTIMETER;
    }
}

$nauticalMiles= new NauticalMileConverter();
echo $nauticalMiles->convert(10) . " nautical miles". "<br>";
$miles= new MileConverter();
echo $miles->convert(10) . " miles" . "<br>";
$yards= new YardConverter();
echo $yards->convert(10) . " yards". "<br>";
$centimeters= new CentimeterConverter();
echo $centimeters->convert(10) . " centimeters". "<br>";