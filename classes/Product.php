<?php

class Product
{

    //* Variabili

    public $name;
    public $material;
    public $imageUrl;
    public $description;
    public $price;

    //| Constructor

    function __construct(string $name, string $material, string $imageUrl, string $description, float $price)
    {
        $this->name = $name;
        $this->material = $material;
        $this->imageUrl = $imageUrl;
        $this->description = $description;
        $this->price = $price;
    }


    //# Metodi

    function getInfo()
    {
        return "Descrizione: " . $this->description;
    }

    function getPrice()
    {
        return "Prezzo: " . $this->price . "€ (al pezzo)";
    }
}
