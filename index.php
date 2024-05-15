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

// oggetti per la categoria "giochi"
$gamedog = new Articles('img', 'Game Dog', 9.9, $giochi, $dog);
$gamedog2 = new Articles('img', 'Game Dog 2', 12.5, $giochi, $dog);
$gamedog3 = new Articles('img', 'Game Dog 3', 14.99, $giochi, $dog);
$gamecat = new Articles('img', 'Game Cat', 9.9, $giochi, $cat);
$gamecat2 = new Articles('img', 'Game Cat 2', 12.5, $giochi, $cat);
$gamecat3 = new Articles('img', 'Game Cat 3', 14.99, $giochi, $cat);

// oggetti per la categoria "cuccie"
$homedog = new Articles('img', 'Home dog', 15.9, $cuccie, $dog);
$homedog2 = new Articles('img', 'Home dog 2', 19.99, $cuccie, $dog);
$homedog3 = new Articles('img', 'Home dog 3', 24.5, $cuccie, $dog);
$homecat = new Articles('img', 'Home cat', 15.9, $cuccie, $cat);
$homecat2 = new Articles('img', 'Home cat 2', 19.99, $cuccie, $cat);
$homecat3 = new Articles('img', 'Home cat 3', 24.5, $cuccie, $cat);

// oggetti per la categoria "cibo"
$xdog = new Articles('img', 'X-DOG', 4.9, $cibo, $dog);
$xdog2 = new Articles('img', 'X-DOG 2', 7.5, $cibo, $dog);
$xdog3 = new Articles('img', 'X-DOG 3', 9.99, $cibo, $dog);
$xcat = new Articles('img', 'X-Cat', 4.9, $cibo, $cat);
$xcat2 = new Articles('img', 'X-Cat 2', 7.5, $cibo, $cat);
$xcat3 = new Articles('img', 'X-Cat 3', 9.99, $cibo, $cat);


$giochi_array = array(
    $gamedog, $gamedog2, $gamedog3, $gamecat, $gamecat2, $gamecat3
);

// array per la categoria "cuccie"
$cuccie_array = array(
    $homedog, $homedog2, $homedog3, $homecat, $homecat2, $homecat3
);

// array per la categoria "cibo"
$cibo_array = array(
    $xdog, $xdog2, $xdog3, $xcat, $xcat2, $xcat3
);

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
    <div class="article">
        <div>
            <h1>Cani</h1>
            <div class="dog">
                <div>
                    <h4>cibo</h4>
                    <?php
                        foreach ($cibo_array as $article) {
                            if ($article->category === $dog) { ?>
                                <div class="card">
                                <p><?php echo $article->image ?></p>
                                <p>Titolo: <?php echo $article->title ?></p>
                                <p>Prezzo: <?php echo $article->price ?></p>
                                <p>Tipo: <?php echo $article->tipology->typologies ?></p>
                                </div>
                        <?php  }
                        } ?>
                </div>
                <div>
                    <h4>cuccie</h4>
                    <?php
                        foreach ($cuccie_array as $article) {
                            if ($article->category === $dog) { ?>
                                <div class="card">
                                <p><?php echo $article->image ?></p>
                                <p>Titolo: <?php echo $article->title ?></p>
                                <p>Prezzo: <?php echo $article->price ?></p>
                                <p>Tipo: <?php echo $article->tipology->typologies ?></p>
                                </div>
                        <?php  }
                        } ?>
                </div>
                <div>
                    <h4>giochi</h4>
                    <?php
                        foreach ($giochi_array as $article) {
                            if ($article->category === $dog) { ?>
                                <div class="card">
                                <p><?php echo $article->image ?></p>
                                <p>Titolo: <?php echo $article->title ?></p>
                                <p>Prezzo: <?php echo $article->price ?></p>
                                <p>Tipo: <?php echo $article->tipology->typologies ?></p>
                                </div>
                        <?php  }
                        } ?>
                </div>
            </div>
        </div>
        <div>
            <h1>Gatti</h1>
            <div class="cat">
                <div>
                    <h4>cibo</h4>
                    <?php
                        foreach ($cibo_array as $article) {
                            if ($article->category === $cat) { ?>
                                <div class="card">
                                <p><?php echo $article->image ?></p>
                                <p>Titolo: <?php echo $article->title ?></p>
                                <p>Prezzo: <?php echo $article->price ?></p>
                                <p>Tipo: <?php echo $article->tipology->typologies ?></p>
                                </div>
                        <?php  }
                        } ?>
                </div>
                <div>
                    <h4>cuccie</h4>
                    <?php
                        foreach ($cuccie_array as $article) {
                            if ($article->category === $cat) { ?>
                                <div class="card">
                                <p><?php echo $article->image ?></p>
                                <p>Titolo: <?php echo $article->title ?></p>
                                <p>Prezzo: <?php echo $article->price ?></p>
                                <p>Tipo: <?php echo $article->tipology->typologies ?></p>
                                </div>
                        <?php  }
                        } ?>
                </div>
                <div>
                    <h4>giochi</h4>
                    <?php
                        foreach ($giochi_array as $article) {
                            if ($article->category === $cat) { ?>
                                <div class="card">
                                <p><?php echo $article->image ?></p>
                                <p>Titolo: <?php echo $article->title ?></p>
                                <p>Prezzo: <?php echo $article->price ?></p>
                                <p>Tipo: <?php echo $article->tipology->typologies ?></p>
                                </div>
                        <?php  }
                        } ?>
                </div>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>