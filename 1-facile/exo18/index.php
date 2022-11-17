<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 18 : Formulaire Get"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
    
<?php 
   
    //   echo '<pre>';
    //   print_r($_SERVER);
    //  echo '</pre>';
        $errors = [
            'name' => '',
            'age' => ''
        ];
        $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
         $name = $_GET['name'] ?? '';
         $age = $_GET['age'] ?? '';
         $isSuccess = true;
        if($_SERVER['REQUEST_METHOD'] === 'GET')
        {
            //echo "$name a $age ans";
            //$isSuccess = true;

            if(!$name){
                $errors['name'] = "champ obligatoire";
                $isSuccess = false;
            }
            if(!$age){
                $errors['age'] = "champ obligatoire";
                $isSuccess = false;
            }

            if(!array_filter($errors, fn ($e) => $e !== ''))
            {
                echo "$name a $age ans";
            }

        }
?>
    <h1>Formulaire</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="GET">
        <div class="form-group">
            <label for="name">Pseudo :</label><br>
            <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="<?= $name  ?>"><br>
            <span class="text-danger"><?= $errors['name'] ?></span>
        </div>
        <div class="form-group">        
            <label for="age">Age :</label><br>
            <input class="form-control" type="number" name="age" id="age" placeholder="Age" value="<?= $age ?>"><br>
            <span style="color:red ;"><?= $errors['age'] ; ?></span>
        </div>
        <input type="submit" value="Send" class="btn btn-primary"><br>
        <?= "$name a $age ans" ?>
    </form>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
