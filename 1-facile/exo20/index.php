<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 20 : Formulaire "; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 

    $errors = [
        'note' => '',
        'note1' => '',
        'note2' => ''
    ];

    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $note = $_POST['note'] ?? '';
    $note1 = $_POST['note1'] ?? '';
    $note2 = $_POST['note2'] ?? '';

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        if(!$note)
        {
            $errors['note'] = 'Fields required';
        }

        if(!$note1)
        {
            $errors['note1'] = 'Fields required';
        }

        if(!$note2)
        {
            $errors['note2'] = 'Fields required';
        }

    }
    $arr = [$note, $note1, $note2];

    function avarege($avg)
    {
        return array_sum($avg) / count($avg);
    }
    // echo '<pre>';
    // print_r($arr);
    // echo '</pre>';

?>
    <h1>Fomulaire Des Notes</h1>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <div class="form-group">
            <label for="note">Notes 1 :</label>
            <input class="form-control" type="number" name="note" id="note">
            <span style="color: red;"><?= $errors['note'] ; ?></span>
        </div>
        <div class="form-group">
            <label for="note1">Notes 2 :</label>
            <input class="form-control" type="number" name="note1" id="note1">
            <span style="color:red ;"><?= $errors['note1'] ?></span>
        </div>
        <div class="form-group">
            <label for="note2">Notes 3 :</label>
            <input class="form-control" type="number" name="note2" id="note2">
            <span style="color:red ;"><?= $errors['note2'] ?></span>
        </div>
        <button class="btn btn-primary" type="submit">Send</button><br>
       <?= 'La Moyenne des 3 est de : ' . avarege($arr) ; ?>
    </form>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
