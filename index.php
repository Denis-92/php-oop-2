<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Pets</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>E-commerce Pets</h1>

    <?php

        require_once __DIR__ . "models/Prodotto.php";
        require_once __DIR__ . "models/AlimentareProdotto.php";
        require_once __DIR__ . "models/GiocattoloProdotto.php";
        require_once __DIR__ . "models/VarieProdotto.php";
        require_once __DIR__ . "models/Ospite.php";
        require_once __DIR__ . "models/Utente.php";

        $articolo1 = new AlimentareProdotto("Crocchette", "Barilla", 20);



    ?>
    
</body>
</html>