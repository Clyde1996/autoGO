<?php


if(isset($_GET['voitures'])){

    $voitures = $_GET['voitures'];

    
    switch($voitures){
       case "class1";
        $titre = "Class 1";
        $content = "
        <img src='src/lambo.png' alt='Lambo'>
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus magnam, error cupiditate deserunt magni tempora. In quaerat sit eos nostrum eligendi aliquid non maxime odio, voluptatibus possimus molestias dolor est.
        </p>
        ";
        break;

        case "class2";
        $titre = "Class 2";
        $content = "
        <img src='src/porsche_PNG10622.png'>
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus magnam, error cupiditate deserunt magni tempora. In quaerat sit eos nostrum eligendi aliquid non maxime odio, voluptatibus possimus molestias dolor est.
        </p>
        ";
        break;
        
        case "class3";
        $titre = "Class 3";
        $content = "
        <img src='src/img3.png'> 
        <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus magnam, error cupiditate deserunt magni tempora. In quaerat sit eos nostrum eligendi aliquid non maxime odio, voluptatibus possimus molestias dolor est.
        </p>
        ";
    }


}else{

$titre = " Liste des voitures ";

$content = '
<ul class="liste">
<li><a href="?voitures=class1"> Class1</a></li>
<li><a href="?voitures=class2"> Class2</a></li>
<li><a href="?voitures=class3"> Class3</a></li>
</ul>
<p><img src="./src/hazir-rent-a-car.png" alt=""></p>
' ;

}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="container">

    <?php include('./Assets/nav.php') ?>
    <?php include('./Assets/header.php') ?>


    <article>
        <p class="fil"><a href="./voitures.php"> Voitures / </a><?= $titre; ?></p>
        <h2><?= $titre; ?></h2>
        <?= $content; ?>
    </article>


    <?php include ('./Assets/footer.php') ?>

</div>
    
</body>
</html>