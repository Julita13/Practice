<?php


namespace src\test;

class Movie {
    public function __construct(private string $title){

    }
    public function getMovie(){
        return $this->title;
    }
}