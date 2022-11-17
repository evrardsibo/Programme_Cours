<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 17 : Tableau Et Function"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php 
        $arr =[['Name' => 'Matthieu', 
        'Age' => 30, 
       'Sexe' => true,
       'Notes' => [2,5,15,10]
       ],
       ['Name' => 'Marie', 
       'Age' => 32, 
       'Sexe' => false,
       'Notes' => [10,12,11,11]

        ],
         ['Name' => 'Marc', 
        'Age' => 25, 
        'Sexe' => true,
        'Notes' => [15,5,20,15]

        ],
        ['Name' => 'Marie', 
        'Age' => 21, 
        'Sexe' => false,
        'Notes' => [3,6,9,12]
        ]
    ];
    // echo '<pre>';
    // //echo array_sum($arr);
    //  print_r(array_column($arr, 'Notes'));
    // echo '</pre>';
    //  exit;

    foreach ($arr as $value)
    {
        echo user($value);
        echo "La moyenne est de : " . average($value['Notes']) . "<br>";
        echo "------------ <br> ";
    }

    function user($users)
    {
        echo "Nom : " . $users['Name'] .  "<br>";
        echo "Age : " . $users['Age'] .  "<br>";
        if($users['Sexe'])
        {
            echo "Sexe : Homme <br>";
        }else
        {
            echo "Sexe : Femme <br>";
        }

        foreach($users['Notes'] as $key => $user)
        {
           
            echo "Note " . ($key +1) . ' : ' . $user . '<br>';
            
        }
    }

    function average($avg)
    {
        return array_sum($avg) / count($avg);
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
