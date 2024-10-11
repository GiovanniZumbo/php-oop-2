<?php

require_once __DIR__ . "/Type.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Toys.php";
require_once __DIR__ . "/Carrier.php";

class Product
{

    //* Variables

    public string $name;
    public string $material;
    public string $imageUrl;
    public string $description;
    public float $price;
    public Type $type;

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

    public function getInfo()
    {
        return "Descrizione: " . $this->description;
    }

    public function getPrice()
    {
        return "Prezzo: " . $this->price . "€ (al pezzo).";
    }

    public function setPrice(float $price)
    {
        if ($price > 0) {
            $this->price = $price;
        } else {
            throw new InvalidArgumentException("Il prezzo inserito non è valido");
        }
    }
}
