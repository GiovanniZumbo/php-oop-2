<?php

require_once __DIR__ . "/Type.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Toys.php";

class Product
{

    //* Variables

    public $name;
    public $material;
    public $imageUrl;
    public $description;
    public $price;
    public $type;

    //| Constructor

    function __construct(string $name, string $material, string $imageUrl, string $description, float $price, Type $type)
    {
        $this->name = $name;
        $this->material = $material;
        $this->imageUrl = $imageUrl;
        $this->description = $description;
        $this->price = $price;
        $this->type = $type;
    }


    //# Methods

    function getInfo()
    {
        return "Descrizione: " . $this->description;
    }

    function getPrice()
    {
        return "Prezzo: " . $this->price . "€ (al pezzo).";
    }
}
