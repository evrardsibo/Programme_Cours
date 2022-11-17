<?php ob_start(); //NE PAS MODIFIER 
$titre = "Arme 1 : Variables "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
$arme1 = 'epee';
$arme2 = 'arc';
$arme3 = 'hache';
$arme4 = 'fleau';
?>

<div><b>Voici toutes les armes</b></div>
<p>
    Arme 1 : <?= $arme1 ?><br>
    Arme 2 : <?= $arme2 ?><br>
    Arme 3 : <?= $arme3 ?><br>
    Arme 4 : <?= $arme4 ?><br>
</p>
<select name="armes" id="arme">
    <option value=""></option>
    <option value="epee"><?= $arme1 ?></option>
    <option value="arc"><?= $arme2 ?></option>
    <option value="hache"><?= $arme3 ?></option>
    <option value="fleau"><?= $arme4 ?></option>
</select>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
