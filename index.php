<?php

//require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Food.php";
require_once __DIR__ . "/classes/Toys.php";
require_once __DIR__ . "/classes/Carrier.php";

$scrocchiazeppi = new Food("Scrocchiazeppi", 1, "100% carne italiana.", "https://rep.grupposme.net/RepAP?code=D1446868&skey=968356899d00369a281ad152d81484e5&resize=225", "Ideali per cani di taglia piccola e media. Nutrienti e ricchi di vitamine.", 23.99, new Type("Cane"), ["Manzo", "Maiale"], "Carne");
$tonnoFresh = new Food("Tonno Fresh", 2, "tranci di salmone e branzino.", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxStx5wKTI34cMjQDT2mY9uyhNwj7P_LsIpw&s", "Adatti per ogni razza di gatto. Da leccarsi i baffi.", 18.99, new Type("Gatto"), ["Salmone", "Branzino"], "Pesce");
$ossoCordato = new Toys("Osso di corda", 3, "100% Cotone", "https://arcaplanet.vtexassets.com/arquivos/ids/223864/trixie-cane-gioco-corda.jpg?v=637454736645100000", "Corda giocattolo pensata per i cani.", 7.99, new Type("Cane"), ["Blu", "Bianco"], "Medio-piccolo");
$trasportino = new Carrier("Trasportino medio", 4, "Plastica", "https://arcaplanet.vtexassets.com/arquivos/ids/277811/yes-trasportino-sierra-plastica-eco-azzurro.jpg?v=638053154131770000", "Trasportino comodo per brevi e lunghi viaggi.", 34.99, new Type("Cane/Gatto"), ["Grigio", "Verde acqua"], "30cm x 20cm x 60cm");
$tiragraffi = new Toys("Tiragraffi in metallo", 5, "Metallo, plastica, spago", "https://m.media-amazon.com/images/I/71AvbGKoyoL._AC_SX679_.jpg", "Tiragraffi per gatti, stabile multilivello", 42.99, new Type("Gatto"), ["Grigio", "Marrone"], "50cm x 50cm x 145cm");

$products = [
    $scrocchiazeppi,
    $tonnoFresh,
    $ossoCordato,
    $trasportino,
    $tiragraffi,
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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <main>
            <h1 class="py-4 text-center">Pet Shop</h1>
            <div class="row row-cols-3 row-gap-4">
                <?php foreach ($products as $product) { ?>

                    <div class="col">
                        <div class="card">
                            <img src=<?= $product->imageUrl ?> class="p-3" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product->name ?> <span class="badge text-bg-danger"><?= $product->type->animal ?></span></h5>
                                <ul class="card-text">
                                    <?= $product->getInfo() ?>
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