<?php

class Toys extends Product
{

    //* Variables

    public $colours;
    public $dimension;

    //| Constructor

    function __construct(
        string $name,
        string $material,
        string $imageUrl,
        string $description,
        float $price,
        Type $type,
        array $colours,
        string $dimension
    ) {

        parent::__construct($name, $material, $imageUrl, $description, $price, $type);
        $this->colours = $colours;
        $this->dimension = $dimension;
    }

    //# Methods

    public function getInfo()
    {
        return
            "<li> Colori: " . $this->colours[0] . ", " . $this->colours[1] . ".</li>
            <li> Dimensione: " . $this->dimension . ".</li>";
    }
}
