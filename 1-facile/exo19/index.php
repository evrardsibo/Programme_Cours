<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 19 : Formulaire Post"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
    $errors = ['number' => ''];
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $number = $_POST['number'] ?? '';

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if(!$number)
        {
            $errors['number'] = 'Fields required';
        }else
        {
            echo "<b>$number</b>";
        }

    }

    function isNumber($num)
    {
        if($num % 2 === 0)
        {
            return "Le Chiffre saisie est pair";
        }else
        {
            return "Le chiffre saisie n'est pas pair";
        }
    }
?>
    <h1>Enter Number</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <div class="form-group">
        <label for="number">Number</label>
        <input class="form-control" type="number" name="number" id="number">
        <span style="color: red;"><?= $errors['number'] ; ?></span>
    </div>
    <button class="btn btn-primary" type="submit">Send</button><br>
   
    </form>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
