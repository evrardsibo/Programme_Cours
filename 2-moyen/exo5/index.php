<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : livres "; //Mettre le nom du titre de la page que vous voulez
include_once '../exo5/livres.php';
?>

<!-- mettre ici le code -->
<?php
     $livre = new Livres('PHP', 'Laravel', 'Evrard', 2021);
     $livre1 = new Livres('Com', 'Comptabilite', 'Belyse', 2020);
     $livre2 = new Livres('JS', 'JavaScript', 'Evan', 2022);
     $livre3 = new Livres('Dk', 'Docker', 'Kendji', 2023);
     $livres = [$livre,$livre1, $livre2, $livre3];


    //  echo '<pre>';
    //  print_r($livres);
    //       echo '</pre>';
    //       exit;

    function all($livre)
    {
       echo '--------------- <br>';
        foreach($livre as $value)
        {
           echo $value .'<br>';
           echo '--------------- <br>';
        }
    }

    function one($livre, $edition, $date)
    {
      echo '--------------- <br>';
      foreach($livre as $value)
      {
        if(($value->getEdition() === $edition || $edition === 'All') && ($value->getDate() === (int)$date || (int)$date === 'All' ))
        {
          echo $value;
          echo '--------------- <br>';
          
        }
      }
    }
?>
  <form action="" method="post">
   <div class="form-group ">
   <label for="edition">Edition :</label>
    <select class="form-control" name="edition" id="edition">
        <option value="All">All</option>
        <option value="Laravel">Laravel</option>
        <option value="Comptabilite">Comptabilite</option>
        <option value="JavaScript">JavaScript</option>
        <option value="Docker">Docker</option>
    </select>
   </div>
   <div class="form-group">
   <label for="edition">Date de parition :</label>
    <select class="form-control" name="date" id="edition">
        <option value="All">All</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
        <option value="2023">2023</option>
    </select>
   </div>
   <button class="btn btn-primary" type="submit">valide</button><br>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
          $errors = ['edtion' => '', 'date' => ''];
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $edition = $_POST['edition'];
        $date = $_POST['date'];
        if(!$edition)
        {
          $errors['edition'] = 'Field required';
        }

        if(!$date)
        {
          $errors['date'] = 'Field required';
        }

        if(!array_filter($errors, fn($e) => $e !== ''))
        {
          one($livres, $edition, $date);
        }else
        {
          all($livres);
        }

        }
    ?>
   <p>&#128512;</p>
  </form>  
 
  
  
    
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
