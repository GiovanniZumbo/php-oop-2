<?php

require_once __DIR__ . "/Product.php";
class Carrier extends Product
{

    //* Variables

    public $colours;
    public $dimensions;

    public float $price;
    public $isAvailable;

    //| Constructor

    function __construct(
        string $name,
        string $id,
        string $material,
        string $imageUrl,
        string $description,
        float $price,
        Type $type,
        array $colours,
        string $dimensions
    ) {

        parent::__construct($name, $id, $material, $imageUrl, $description, $price, $type);
        $this->colours = $colours;
        $this->dimensions = $dimensions;
    }

    //# Methods

    public function getInfo()
    {
        return
            "<li> Colori: " . $this->colours[0] . ", " . $this->colours[1] . ".</li>
            <li> Dimensioni: " . $this->dimensions . ".</li>";
    }
}
