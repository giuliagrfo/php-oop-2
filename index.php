<?php
/* 
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
*/

require __DIR__ . "/Models/Product.php";
require __DIR__ . "/Models/Category.php";

$products = [

    $dogFood = new Product('https://www.bauzaar.it/media/catalog/product/0/_/0._-_2021-07-06t151328.591.png?width=700&height=700&store=default&image-type=image', 'Almo Nature', 40, 'L\'alimento secco completo per il mantenimento dei cani adulti', new Category('Dog')),
    $gameCat = new Product('https://www.aquazoomaniashop.it/16207-large_default/camon-tiragraffi-a-3-basi-con-tunnel.jpg', 'Scratching post', 80, 'Il prodotto ideale per proteggere i tuoi articoli d’arredamento dalle unghie del tuo gatto', new Category('Cat')),
    $catFood = new Product('https://shop-cdn-m.mediazs.com/bilder/pro/plan/liveclear/gatti/adulti/sterilizzati/ricco/in/tacchino/5/400/181596_pla_proplan_liveclear_adult_sterilized_turkey_itl_1_4kg_hs_01_5.jpg', 'Pro Plan Live Clear', 25, 'È un\'alimento rivoluzionario, che è stato dimostrato ridurre in media del 47% l’allergene sul pelo del gatto', new Category('Cat')),
    $gameDog = new Product('https://shop-cdn-m.mediazs.com/bilder/kong/flyer/4/400/26785_pla_kong_flyer_hundefrisbee_l_hs_kf3e_4.jpg', 'KONG Flyer', 18, 'Consente lanci lunghi e precisi, robusto e delicato sui denti,', new Category('Dog'))
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $item) { ?>
                <div class="col-4 g-2">
                    <div class="card" style="height: 100%">
                        <div class="card-body">
                            <img class="img-fluid" src="<?php echo $item->img ?>" alt="">
                            <p>Name: <?php echo $item->name ?> </p>
                            <p>Price: <?php echo $item->price ?> </p>
                            <p>Description:<?php echo $item->description ?></p>
                            <p>Category: <?php echo $item->category->category ?> </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>