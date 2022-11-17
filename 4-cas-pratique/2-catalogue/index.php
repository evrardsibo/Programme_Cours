<?php ob_start(); //NE PAS MODIFIER 
$titre = "Catalogue"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
    $dsn = 'mysql:dbname=catalogues;host=localhost';
    $user = 'root';
    $password = '';
    $option = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];

    try{
        $pdo = new PDO($dsn, $user, $password, $option);
    }catch(PDOException $e){
        echo 'Connexion failed :' . $e->getMessage();
    }

    $req = 'SELECT * FROM cours';
    
    $stmt = $pdo->prepare($req);
    
   
    $stmt->execute();
    $cours = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
?>
 <div class="row no-gutters"> <!-- no-gutters pour n'est pas avoir des marge -->
    <?php foreach ($cours as $cour) : ?>
      <div class="col-4">
        <div class="card m-2" style="">
                <img class="card-img-top" src="./source/<?= $cour['image'] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $cour['libelle'] ?></h5>
                    <p class="card-text"><?= $cour['description'] ?></p>
                    <?php
                        $req2 = 'SELECT * FROM type WHERE idType = :idType';
                        $stmt2 = $pdo->prepare($req2);
                        $stmt2->bindValue(':idType', $cour['idType'], PDO::PARAM_INT);
                        $stmt2->execute();
                        $type = $stmt2->fetch(PDO::FETCH_ASSOC);                        
                    ?>
                    <span class="badge badge-primary"><?= $type['libelle'] ?></span>
                </div>
            </div>
      </div> 
    <?php endforeach ?>
 </div>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>