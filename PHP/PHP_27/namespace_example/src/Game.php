<?php
// namespace src;
namespace MyProject;

class Game
{
    public function __construct(public string $name)
    {
    }

    public function getTitle(): string
    {
        return $this->name;
    }
}