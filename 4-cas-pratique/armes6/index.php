<?php ob_start(); //NE PAS MODIFIER 
$titre = "Arme 6 : Gestion de l'image"; //Mettre le nom du titre de la page que vous voulez
include_once '../armes6/Armes.php';
?>

<!-- mettre ici le code -->
<?php 
$arme1 = new Armes('Epee', 'Une arme tranchante');
$arme2 = new Armes('Arc', 'Une arme a distance');
$arme3 = new Armes('Hache', 'Une arme tranchante ou qui permet a couper du bois');
$arme4 = new Armes('fleau', 'Une arme du moyen age');
$array = [$arme1, $arme2, $arme3, $arme4];
// echo '<pre>'; 
// print_r($array);
// echo '</pre>';
function seo_friendly_url($string){
    $string = str_replace(array('[\', \']'), '', $string);
    $string = preg_replace('/\[.*\]/U', '', $string);
    $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
    $string = htmlentities($string, ENT_COMPAT, 'utf-8');
    $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
    $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
    return strtolower(trim($string, '-'));
}
?>

<h6><b>Voicie Les armes</b></h6>
<?php foreach ($array as $arr) : ?>
    <div class="row align-items-center">
        <div class="col-3 text-center">
            <img src="<?=$arr->getLevel() ?>" alt="image">
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
