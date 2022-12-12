<?php

class Product
{
    public $name;
    public $price;
    public $description;

    public function __construct(String $img, String $name, int $price, String $description, Category $category)
    {
        $this->img = $img;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->category = $category;
    }
}
