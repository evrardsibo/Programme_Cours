<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Class "; //Mettre le nom du titre de la page que vous voulez
include_once '../exo4/animals.php';
?>

<!-- mettre ici le code -->
<?php 
    $animals = new Animals('Tiya', 7, 'chat');
    $animals1 = new Animals('Milo', 4, 'chat');
    $animals2 = new Animals('Hocket', 6, 'chien');
    $animals3 = new Animals('Mina', 2, 'chien');
    $all = [$animals, $animals1, $animals2, $animals3];
    
    function all()
    {
            echo '-------- <br>';
            global $all;
            foreach($all as  $value)
            {
                 if(is_object($value))
                 {
                    foreach($value as $k => $v)
                    {
                        echo $k . ':' . $v . '<br>';
                    }
                    echo '-------- <br>';
                 }
            }
        }
    
        function type($type)
        {
            global $all;
            echo '-------- <br>';
            foreach($all as $value)
        {
          if(is_object($value))
          {
              if($value->type === $type )
              {
                foreach($value as $k => $v)
                {
                    echo $k . ':' . $v . '<br>';
                }
                echo '-------- <br>';
              }
          }
        }

        }
    //type('chat');
    //all()
?>

<div>
    <a class="btn btn-primary" href="?type=all">All</a>
    <a class="btn btn-primary" href="?type=dog">Dog</a>
    <a class="btn btn-primary" href="?type=cat">Cat</a>
</div>
<?php 
    if(isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] !== 'all')
    {
        if($_GET['type'] === 'dog')
            {
                type('chien');
            }elseif($_GET['type'] === 'cat')
            {
                type('chat');
            }
    }else
    {
       all();
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
