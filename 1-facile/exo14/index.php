<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 14 : Tableau Et Function"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $marc = [12,15,13,7,18];
    $matthieu = [11,14,10,4,20,8,2];
    $pierre = [5,13,9,3];
    $paul = [6,11,15,2];
    $studient = [$marc, $matthieu, $pierre, $paul];
    // echo '<pre>';
    // print_r($studient);
    // echo '</pre>';
    // exit;
    foreach ($studient as $key => $value) {
        
        echo "La moyenne des notes du <b>$key</b> eme element est de <b>" . average($value) . "</b> <br>" ;
    }

    function average($arr)
    {
        return array_sum($arr) / count($arr);
    }

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
