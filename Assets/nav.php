<?php


/*Cette condition ca select le page  lorsque est active dans notre cas les pages sont concerne par le class1 etc */
if(preg_match('#voitures#', $_SERVER['REQUEST_URI'])){ // si a l'interieur d-url tu trouve le mot voitures
    $class1 = "";
    $class2 = "active";
    $class3 = "";
}elseif(preg_match('#contact#', $_SERVER['REQUEST_URI'])){ //si a l'interieur d-url tu trouve le mot contact
    $class1 = "";
    $class2 = "";
    $class3 = "active";
}else{
    $class1 = "active"; 
    $class2 = "";
    $class3 = "";
}

?>


<nav>
        <ul>
            <li>

                <a class="<?= $class1; ?>"  class="active" href="index.php">Home</a>
            </li>
            <li>

                <a class="<?= $class2; ?>"  href="voitures.php">Voitures</a>
            </li>
            <li>

                <a  class="<?= $class3; ?>" href="contact.php">Contact</a>
            </li>

        </ul>
    </nav>