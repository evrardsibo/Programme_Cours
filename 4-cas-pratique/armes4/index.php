<?php ob_start(); //NE PAS MODIFIER 
$titre = "Arme 4 : POO"; //Mettre le nom du titre de la page que vous voulez
include_once '../armes4/Armes.php';
?>

<!-- mettre ici le code -->
<?php 
$arme1 = new Armes('Epee', './sources/epee/epee1.png', 'Une arme tranchante');
$arme2 = new Armes('Arc', './sources/arc/arc1.png', 'Une arme a distance');
$arme3 = new Armes('Hache', './sources/hache/hache1.png', 'Une arme tranchante ou qui permet a couper du bois');
$arme4 = new Armes('fleau', './sources/fleau/fleau1.png', 'Une arme du moyen age');
$array = [$arme1, $arme2, $arme3, $arme4];

?>

<h6><b>Voicie Les armes</b></h6>
<?php foreach ($array as $arr) : ?>
    <div class="row align-items-center">
        <div class="col-3 text-center">
            <img src="<?=$arr->image ?>" alt="image">
        </div>
        <div class="col-auto">
            <h4><?=$arr->name ?></h4>
            <p><?=$arr->description ?></p>
        </div>
    </div>
<?php endforeach ; ?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
