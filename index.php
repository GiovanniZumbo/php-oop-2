<?php

require_once __DIR__ . "/classes/Product.php";



$scrocchiazeppi = new Product("Scrocchiazeppi", "100% carne italiana", "...", "Ideali per cani di taglia piccola e media. Nutrienti e ricchi di vitamine", 23.99, new Type("Dog"));
$tonnoFresh = new Product("Tonno Fresh", "tranci di salmone e branzino", "...", "Adatti per ogni razza di gatto. Da leccarsi i baffi", 18.99, new Type("Cat"));

$products = [
    $scrocchiazeppi,
    $tonnoFresh
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css' integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==' crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <main>
            <h1 class="py-4 text-center">Animal Shop</h1>
            <div class="row row-cols-3">
                <?php foreach ($products as $product) { ?>

                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->name ?> <span class="badge text-bg-danger"><?= $product->$type->animal ?></span></h5>
                                <ul class="card-text">
                                    <li><?= $product->getInfo() ?></li>
                                    <li><?= $product->getPrice() ?></li>
                                </ul>

                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </main>
    </div>

</body>

</html>