<?php ob_start(); //NE PAS MODIFIER 
$titre = "Arme 1 : Tableaux "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
$arme1 = 'epee';
$arme2 = 'arc';
$arme3 = 'hache';
$arme4 = 'fleau';
$array = [$arme1, $arme2, $arme3, $arme4];
// echo '<pre>'; 
// print_r($array);
// echo '</pre>';
?>

<div><b>Voici les armes dans un tableau PHP</b></div>
<p>
    Arme 1 : <?= $array[0] ?><br>
    Arme 2 : <?= $array[1]  ?><br>
    Arme 3 : <?= $array[2]  ?><br>
    Arme 4 : <?= $array[3]  ?><br>
</p>
<div><b>Affichage dans une boucle for</b></div>
<p>
   <?php 
    for($i=0; $i < count($array) ; $i++)
    {
        echo 'Arme ' . ($i+1) . ' : ' . $array[$i] . '<br>';
    }
   ?>

</p>

<div><b>Affichage dans une boucle foreach</b></div>
<p>
    <?php
        foreach ($array as $k => $arr)
        {
            echo 'Arme ' . ($k+1) . ' : ' . $arr . '<br>';
        }
    ?>
</p>




<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
