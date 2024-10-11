<?php

require_once __DIR__ . "/Product.php";

class Food extends Product
{

    //* Variables

    public $ingredients;
    public $flavour;

    //| Constructor

    function __construct(
        string $name,
        int $id,
        string $material,
        string $imageUrl,
        string $description,
        float $price,
        Type $type,
        array $ingredients,
        string $flavour
    ) {

        parent::__construct($name, $id, $material, $imageUrl, $description, $price, $type);
        $this->ingredients = $ingredients;
        $this->flavour = $flavour;
    }

    //# Methods

    public function getInfo()
    {

        return
            "<li> Ingredienti: " . $this->ingredients[0] . ", " . $this->ingredients[1] . "</li>
            <li> Gusto: " . $this->flavour . ".</li>";
    }
}
