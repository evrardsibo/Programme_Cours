<?php ob_start(); //NE PAS MODIFIER 
$titre = "Arme 5 : Emelioration de la class"; //Mettre le nom du titre de la page que vous voulez
include_once '../armes5/Armes.php';
?>

<!-- mettre ici le code -->
<?php 
$arme1 = new Armes('Epee', RandImg('../armes5/sources/epee/'), 'Une arme tranchante');
$arme2 = new Armes('Arc', RandImg('../armes5/sources/arc/'), 'Une arme a distance');
$arme3 = new Armes('Hache', RandImg('../armes5/sources/hache/'), 'Une arme tranchante ou qui permet a couper du bois');
$arme4 = new Armes('fleau', RandImg('../armes5/sources/fleau/'), 'Une arme du moyen age');
$array = [$arme1, $arme2, $arme3, $arme4];
function RandImg($dir)
{
$images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$randomImage = $images[array_rand($images)];
return $randomImage;
}
?>

<h6><b>Voicie Les armes</b></h6>
<?php foreach ($array as $arr) : ?>
    <div class="row align-items-center">
        <div class="col-3 text-center">
            <img src="<?=$arr->getImage() ?>" alt="image">
        </div>
        <div class="col-auto">
            <h4><?=$arr->getName() ?></h4>
            <p><?=$arr->getDescription() ?></p>
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
