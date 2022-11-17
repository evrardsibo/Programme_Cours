<?php ob_start(); //NE PAS MODIFIER 
$titre = "Arme 3 : Tableaux Associatif"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
$arme1 = ['Name' => 'Epee', 'Image' => './sources/epee/epee1.png', 'Description' => 'Une arme tranchante'];
$arme2 = ['Name' => 'Arc', 'Image' => './sources/arc/arc1.png', 'Description' => 'Une arme a distance'];
$arme3 = ['Name' => 'Hache', 'Image' => './sources/hache/hache1.png', 'Description' => 'Une arme tranchante ou qui permet a couper du bois'];
$arme4 = ['Name' => 'fleau', 'Image' => './sources/fleau/fleau1.png', 'Description' => 'Une arme du moyen age'];
$array = [$arme1, $arme2, $arme3, $arme4];
// echo '<pre>'; 
// print_r($array);
// echo '</pre>';



// foreach($array as $arr) {

//     echo '<pre>'; 
// print_r($arr);
// echo '</pre>';
    
// }
?>

<h6><b>Voicie Les armes</b></h6>
<?php foreach ($array as $arr) : ?>
    <div class="row align-items-center">
        <div class="col-3 text-center">
            <img src="<?=$arr['Image'] ?>" alt="image">
        </div>
        <div class="col-auto">
            <h4><?=$arr['Name'] ?></h4>
            <p><?=$arr['Description'] ?></p>
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
