<?php
include_once __DIR__ . "/helpers.php";

class Rectangle
{
    public function __construct(
        public int $length,
        public int $width
    ){}
    public function calculateArea(): int
    {
        return ceil($this->length * $this->width);
    }

    public function calculatePerimeter(): int
    {
        return ceil(($this->length + $this->width) * 2);
    }

    public function calculateDiagonal(): int
    {
        return ceil(sqrt((pow($this->length, 2) + pow($this->width, 2))));
    }
}

$shape = new Rectangle(2, 4);
dump($shape->calculateArea());
dump($shape->calculatePerimeter());
dump($shape->calculateDiagonal());