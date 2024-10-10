<?php

require_once __DIR__ . "/Type.php";

class Product
{

    //* Variables

    public $name;
    public $material;
    public $imageUrl;
    public $description;
    public $price;
    public $animal;

    //| Constructor

    function __construct(string $name, string $material, string $imageUrl, string $description, float $price, Type $animal)
    {
        $this->name = $name;
        $this->material = $material;
        $this->imageUrl = $imageUrl;
        $this->description = $description;
        $this->price = $price;
        $this->animal = $animal;
    }


    //# Methods

    function getInfo()
    {
        return "Descrizione: " . $this->description;
    }

    function getPrice()
    {
        return "Prezzo: " . $this->price . "€ (al pezzo)";
    }
}
