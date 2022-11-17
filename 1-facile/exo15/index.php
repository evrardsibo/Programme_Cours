<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 15 : Tableau Et Function"; //Mettre le nom du titre de la page que vous voulez
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

        foreach ($arr as $value)
        {
            echo user($value);
            echo "------------ <br> ";
        }

    function user($user)
    {
        echo "Nom : " . $user['Name'] .  "<br>";
        echo "Age : " . $user['Age'] .  "<br>";
        if($user['Sexe'])
        {
            echo "sexe : Homme <br>";
        }else
        {
            echo "sexe : Femme <br>";
        }
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
