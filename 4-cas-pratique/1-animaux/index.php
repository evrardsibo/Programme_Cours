<?php ob_start(); //NE PAS MODIFIER 
$titre = "Animals"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->

<?php  
    require_once './contrrolleranimal.php';
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Age</th>
      <th scope="col">Sexe</th>
      <th scope="col">Type</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach(Animal::$mesAnimaux as $animal) : ?>
    <tr>
      <th scope="row"><?= $animal->getId() ?></th>
      <td><?= $animal->getNom() ?></td>
      <td><?= $animal->getAge() ?></td>
      <td><?= ($animal->getSexe() ==0) ? 'Femelle' : 'Male'?></td>
      <td><?= $animal->getType() ?></td>
      <?php foreach($animal->getImage() as $a) : ?>
      <td><img src="./sources/<?= $a['url'] ?>" alt="<?= $a['libelle'] ?>" sizes="width=100" height="100" srcset=""></td>
      <?php endforeach ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>