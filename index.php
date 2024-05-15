<?php

require_once __DIR__ . '/models/articles.php';
require_once __DIR__ . '/models/categories.php';
require_once __DIR__ . '/models/tipologies.php';



// class categories
$dog = new Categories('Dog');
$cat = new Categories('Cat');

// class tipologies
$giochi = new Typologies('Giochi');
$cuccie = new Typologies('Cuccie');
$cibo = new Typologies('Cibo');

$giochi = new Articles('img','Game Dog',9.9,$giochi,$dog);
$cuccie = new Articles('img','Home Amimals',15.9,$cuccie,$dog);
$cibo= new Articles('img','X-DOG',4.9,$cibo,$dog);

var_dump($giochi,$cuccie,$cibo)
?>






<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>