<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Tableau"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 

    $marc = [12,15,13,7,18];
    $matthieu = [11,14,10,4,20,8,2];
    function avarage($avg)
    {
        return array_sum($avg) / count($avg);
    }

    $avg1 = avarage($marc);
    $result = 0;
    foreach($matthieu as $key => $value)
    {
        $result += $value;
    }
    echo "La moyenne des notes de <b>Marc</b> est de <b>$avg1</b> <br>";
    echo "La moyenne des notes de <b>Matthieu</b> est d <b> " . ($result / count($matthieu)) . "</b>";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
