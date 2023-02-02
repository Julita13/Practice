<?php

namespace src;


//po užrašo 3-oje eilutėje klasės Movie pavadinimas keičiasi į src/Movie

class Movie{


    public function __construct(private string $title){

    }
    public function getMovie(){
        return $this->title;
    }
}