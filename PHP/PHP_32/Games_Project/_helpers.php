<?php 
//AutoLoadinamas failas, funkcijos pasiekiamos bet kur projekte.
use App\Services\Template;

if(!function_exists("view")){
    function view(string $path, array $data = []):void{
        $template = new Template($path, $data);
        $template->render();
    }
}

if(!function_exists("url")){
    function url(string $path){
        $public = "http://localhost/PHP_32/Games_Project/public/";
        return $public . $path;
    }
}