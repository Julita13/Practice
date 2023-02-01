<?php


//1 task: 
// class File{
//     public function __construct(private string $filePath) {} //konstruktoriaus savybė/argumentas

//     public function getFileContents() {
//         if(!file_exists($this->filePath)){
//             throw new \Exception("This file does not exist");
//         } 
//         return file_get_contents($this->filePath);
//     }

//     public function createFile(){
//         if(file_exists($this->filePath)){
//             throw new \Exception("This file already exists");
//         } else{
//             touch($this->filePath);
//         }
//     }

//     public function writeToFile(string $content, bool $overwrite = false){
//         if($this->getFileContents() && !$overwrite){
//             throw new Exception("Can`t write to this file");           
//         }else{
//             file_put_contents($this->filePath, $content);
//         }
//     }
// }

// $myFile= new File(__DIR__ . "/test.txt");  //Objektas (konstruktoriaus savybė/argumentas)

// Exception:
// try{
//     echo $myFile->getFileContents(); // 1-asis exception'as
//     // echo $myFile->createFile();
//     // echo $myFile->writeToFile("bebebe, true);
// }catch(\Exception $e){
//     print_r($e->getMessage());
// }

class PasswordValidator{

    public function __construct(public string $password){}

    public function validate():void{
        if(strlen($this->password)<10){
            throw new \Exception("Your password should contain at least 10 symbols");
        }

        $splitPassword = str_split($this->password);
        $splitSymbols= str_split("!@#$%^&*_");
        // var_dump($splitPassword, $splitSymbols);
        $intersected = array_intersect($splitSymbols, $splitPassword);
        // var_dump($intersected);

        if(count($intersected) <2 ){
            throw new \Exception("Your password should contain at least 2 special symbols");
        } 

        if((strtolower($this->password) === $this->password) || (strtoupper($this->password) === $this->password)){
            throw new \Exception("Your password should contain at least one lower and one upper letter");
        }

        $regex = "/[0-9]/";
        if(!preg_match($regex, $this->password)){
            throw new \Exception("Your password should contain at least one number");
        }
        echo "Your password is ok!";
    }
}


$validator = new PasswordValidator('SecretPassword123!@');

   try{
     $validated = $validator->validate();
    }catch (Exception $e){
        echo $e->getMessage();
}