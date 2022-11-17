<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Attribut "; //Mettre le nom du titre de la page que vous voulez
include_once '../exo6/maison.php';
?>

<!-- mettre ici le code -->

    <?php 
    $house = new House(2018, 90, 2);
    $house1 = new House(2012, 190, 3);
    $house2 = new House(2016, 290, 5);
    $house3 = new House(2023, 290, 3);
    $houses = [$house, $house1, $house2, $house3];
    //    echo '<pre>';
    //   print_r($houses);
    //  echo '</pre>';
    ?>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Date</th>
          <th>Chambres</th>
          <th>Surface</th>
        </tr>
        <tbody>
          <?php foreach ($houses as $house) : ?>
          <tr>
              <td><?= $house->getId() ?></td>
              <td><?= $house->getDate() ?></td>
              <td><?= $house->getchambre() ?></td>
              <td><?= $house->getSurface() ?></td>
            </tr>
            <?php endforeach ; ?>
        </tbody>
      </thead>
    </table>
   <p>&#128512;</p>
  
    
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
