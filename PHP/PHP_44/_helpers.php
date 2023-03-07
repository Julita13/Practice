<?php 
//AutoLoadinamas failas, funkcijos pasiekiamos bet kur projekte.
use App\Services\View;

if(!function_exists("view")){
    function view(string $path, array $data = []):View{
       return new View($path, $data);
    }
}

if(!function_exists("url")){
    function url(string $path){
        $public = "http://localhost/PHP_44/public/";
        return $public . $path;
    }
}

?>