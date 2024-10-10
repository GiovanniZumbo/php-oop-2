<?php

class Food extends Product
{

    //* Variables

    public $ingredients;
    public $flavour;

    //| Constructor

    function __construct(
        string $name,
        string $material,
        string $imageUrl,
        string $description,
        float $price,
        Type $type,
        array $ingredients,
        string $flavour
    ) {

        parent::__construct($name, $material, $imageUrl, $description, $price, $type);
        $this->ingredients = $ingredients;
        $this->flavour = $flavour;
    }

    //# Methods

    public function getIngredients()
    {
        return "Ingredienti: " . $this->ingredients[0] . ", " . $this->ingredients[1] . ".";
    }

    public function getFlavour()
    {
        return "Gusto: " . $this->flavour . ".";
    }
}
