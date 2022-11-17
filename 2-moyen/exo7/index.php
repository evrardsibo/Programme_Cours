<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Attribut "; //Mettre le nom du titre de la page que vous voulez
include_once '../exo7/guns.php';
include_once '../exo7/player.php';
?>

<!-- mettre ici le code -->

  <?php 
    $gun = new Guns("Hash", 10);
    $gun1 = new Guns("Epee", 8);
    $player = new Players();
    $player->setName('Evan');
    $player->setIdGun($gun->getId());
    $player1 = new Players();
    $player1->setName('Kendji');
    $player1->setIdGun($gun1->getId());
    echo $player;
    echo '----------- <br>';
    echo $player1;
  ?> 
   <p>&#128512;</p>
  
    
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
