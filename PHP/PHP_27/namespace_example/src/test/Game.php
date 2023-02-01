<?php

// namespace src\test;
namespace MyProject\test;

class Game
{
    public function __construct(public string $name)
    {
    }

    public function getTitle(): string
    {
        return "This is another game class";
    }
}