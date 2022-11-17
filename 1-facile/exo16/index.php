<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 16 : Tableau Et Function"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
        $arr =[['Name' => 'Matthieu', 
        'Age' => 30, 
       'Sexe' => true
       ],
       ['Name' => 'Marie', 
       'Age' => 32, 
       'Sexe' => false
        ],
         ['Name' => 'Marc', 
        'Age' => 25, 
        'Sexe' => true
        ],
        ['Name' => 'Marie', 
        'Age' => 21, 
        'Sexe' => false
        ]
    ];
//  echo '<pre>';
// print_r($arr);
//  echo '</pre>';
// exit;

function user($users)
{
   foreach($users as $key => $value)
   {
       if(is_array($value))
       {
           foreach($value as $k =>$v)
           {  
               echo "$k : $v <br>";
               

           }
       }
   }
}

user($arr);

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
