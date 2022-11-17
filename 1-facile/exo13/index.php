<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : Tableau Et Function"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $marc = [12,15,13,7,18];
    $matthieu = [11,14,10,4,20,8,2];
    $pierre = [5,13,9,3];
    $paul = [6,11,15,2];

    function average($arr)
    {
        return array_sum($arr) / count($arr);
    }

    $avg = average($marc);
    $avg1 = average($matthieu);
    $avg2 = average($pierre);
    $avg3 = average($paul);
    echo "La mayonne des notes de <b>Marc</b> est de <b>$avg</b> <br>";
    echo "La mayonne des notes de <b>Matthieu</b> est de <b>$avg1</b> <br>";
    echo "La mayonne des notes de <b>Pierre</b> est de <b>$avg2</b> <br>";
    echo "La mayonne des notes de <b>Paul</b> est de <b>$avg3</b> <br>";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
