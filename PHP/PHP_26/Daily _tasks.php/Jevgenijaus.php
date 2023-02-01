<?php
declare(strict_types=1);

// try{
//     throw new \Exception('Labas vakaras');
// }catch(\Exception $exceptions){
//     print_r($exceptions->getMessage());
// }
class AmountValidator 
{
    public function validate(int $amount):void{
        if($amount < 0) {
            throw new \Exception('Amount must be positive');
        }
    }
}
// $amountValidator = new AmountValidator();
// try {
//     $amountValidator->validate(-1);
// }catch(\RuntimeException $exc){
//     echo $exc->getMessage();
// }catch(\Exception $exc){
//     echo $exc->getMessage();
// }

/*1. Sukurti klasę File
2.Į konstruktorių paduoti kelią iki failo, kuris bus saugomas savybėj $filePath
3.Parašykite metodą getFileContents, kuris paima failo turinį. Jei failas neegzistuoja,metamas Exception.
Jei egzistuoja, grąžinamas jo turinys.
4. Parašykite metodą createFile.
 Jei failas egzistuoja, metama išlyga Exception.
 Jei neegzistuoja,sukuriamas failas su touch() metodu.
5. Parašykite metodą writeToFile.
   Metodas priima tekstą įrašymui string $content ir bool $overwrite = false.  
   Patikrinama:        Ar failas egzistuoja        Ar failas turi turinį        Ar nustatyta overwrite           
Jei failas egzistuoja ir turi turinį, bet overwrite yra false, metamas exception, kad negalim perrašyti. 
Jei turinys tuščias arba  overwrite true, atliekamas įrašymas.*/
// Visi metodai išbandomi try catch bloke

class File 
{
    public function __construct(public string $path){

    }
    public function getFileContents(){
        if(!file_exists($this->path)){
            throw new \Exception("Didn`t find file");          
        }
        return file_get_contents($this->path);
    }
    public function createFile():void{
        if(!file_exists($this->path)){
            touch(__DIR__ . "/file.txt");
        }else{
            throw new \Exception("Error Processing Request");        
        }
    }
    public function writeToFile(string $content, bool $overwrite){
        if($this->getFileContents() && !$overwrite){
            throw new Exception("Can`t write to file");           
        }else{
            file_put_contents($this->path, $content);
        }
    }
}
// $file = new File(__DIR__."/file.txt");
// try {
//     echo $file->writeToFile("asd", false);
//     // echo $file->createFile();
//     // echo $file->getFileContents();
// } catch (\Exception $th) {
//     echo $th->getMessage();
// }


/*1.Parašykite įrankį slaptažodžio stiprumui nustatyti.
Slaptažodis turi:- būti sudarytas iš ne mažiau 10 simbolių
- turi turėti bent 2 skirtingus specialiuosius simbolius (!@#$%^&*_)
- turi turėti ir mažųjų, ir didžiųjų raidžių (aB)
- turi turėti bent vieną skaitmenį (0-9)
Slaptažodžio validavimas turi vykti klasėje PasswordValidator.
Validatorius, atradęs taisyklės pažeidimą, turi mesti exception'ą su žinute(pvz.: "Slaptažodis turi susidaryti bent iš 10 simbolių.")
Kodas, kviečiantis validatorių turi gaudyti exception'ą ir spausdinti žinutę terminale.
Jeigu slaptažodis atitinka reikalavimus, išvesti "Slaptažodis tinkamas".
Failo kvietimo pavyzdys:try 
{    $validator = new PasswordValidator('SecretPassword123');
        $validated = $validator->validate();} 
    catch (Exception $e) 
    {    echo $e->getMessage();}
    Slaptažodis turi susidaryti bent iš 10 simbolių
    .Slaptažodis turi turėti bent 2 specialius symbolius (!@#$%^&*_)
.Slaptažodis turi turėti bent po vieną didžiąja ir vieną mažąją raides.*/

class PasswordValidator
{
    public function __construct(public string $pass){

    }
    // public function validate():void{
    //     $password_regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{10,}$/";
    //     if(!preg_match($password_regex, $this->pass)){
    //         throw new Exception("Slaptažodis turi susidaryti bent iš 10 simbolių \n bent 2 specialius symbolius (!@#$%^&*_),\n turi turėti ir mažųjų, ir didžiųjų raidžių (aB)\n turi turėti bent vieną skaitmenį (0-9) ");           
    //     }else{
    //         echo "Slaptažodis tinkamas";
    //     }
    // }
    public function validate(): void{
        if(strlen($this->pass)<10){
            throw new Exception("Less then 10 simbols");    
        }
        $splitPass = str_split($this->pass);
        $splitRule = str_split("!@#$%^&*_");
        $intersect = array_intersect($splitRule, $splitPass);
        // var_dump($intersect);
        if(count($intersect)<2){
            throw new Exception("turi turėti bent 2 skirtingus specialiuosius simbolius (!@#$%^&*_)");
        }
        if((strtolower($this->pass) === $this->pass) || (strtoupper($this->pass) === $this->pass)) {
            throw new Exception("turi turėti ir mažųjų, ir didžiųjų raidžių (aB)");
        }
        $regex = "/[0-9]/";
        if(!preg_match($regex, $this->pass)){
            throw new Exception("turi turėti bent vieną skaitmenį (0-9)");
        }
        echo "Slaptažodis tinkamas";
    }
    
}
try 
{
$validator = new PasswordValidator('Se@$cretPassword0');
$validated = $validator->validate();
} catch (Exception $e) {
    echo $e->getMessage();
}
?>