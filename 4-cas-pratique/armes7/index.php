<?php 
session_start();
if(!isset($_SESSION['Epee']))$_SESSION['Epee']=1;
if(!isset($_SESSION['Arc']))$_SESSION['Arc']=1;
if(!isset($_SESSION['Hache']))$_SESSION['Hache']=1;
if(!isset($_SESSION['fleau']))$_SESSION['fleau']=1;
ob_start(); //NE PAS MODIFIER 
$titre = "Arme 7 : Gestion de l'image"; //Mettre le nom du titre de la page que vous voulez
include_once '../armes7/Armes.php';
?>

<!-- mettre ici le code -->
<?php 

 
try {
    try {
        throw new Exception('Une première exception');
    } catch (Exception $e) {
        try {} catch (Exception $e) {
            throw new Exception('Une seconde exception');
        }
         throw new Exception('Une troisième exception');
    }
    throw new Exception('Une quatrième exception');
} catch (Exception $e) {
    echo $e->getMessage();
}
$arme1 = new Armes('Epee', 'Une arme tranchante', 5);
$arme2 = new Armes('Arc', 'Une arme a distance', 2);
$arme3 = new Armes('Hache', 'Une arme tranchante ou qui permet a couper du bois', 5);
$arme4 = new Armes('fleau', 'Une arme du moyen age', 5);
$array = [$arme1, $arme2, $arme3, $arme4];
echo '<pre>'; 
var_dump($_SERVER);
echo '</pre>';
if(isset($_GET['armeEpee'])){
    $_SESSION['Epee'] = $_GET['armeEpee'];  
}
if(isset($_GET['armeArc'])){
    $_SESSION['Arc'] = $_GET['armeArc'];
}
if(isset($_GET['armeHache'])){
    $_SESSION['Hache'] = $_GET['armeHache'];
}
if(isset($_GET['armefleau'])){
    $_SESSION['fleau'] = $_GET['armefleau'];
}

$arme1->SetLevel($_SESSION['Epee']);
$arme2->SetLevel($_SESSION['Arc']);
$arme3->SetLevel($_SESSION['Hache']);
$arme4->SetLevel($_SESSION['fleau']);

function seo_friendly_url($string){
    $string = str_replace(array('[\', \']'), '', $string);
    $string = preg_replace('/\[.*\]/U', '', $string);
    $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
    $string = htmlentities($string, ENT_COMPAT, 'utf-8');
    $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
    $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
    return strtolower(trim($string, '-'));
}
?>

<h6><b>Voicie Les armes</b></h6>
<?php foreach ($array as $arr) : ?>
    <div class="row align-items-center">
        <div class="col-3 text-center">
            <img src="<?=$arr->getLevel() ?>" alt="image">
        </div>
        <div class="col-3">
            <form action="#" method="get">
                <select name="arme<?= $arr->getName() ?>" id="" onchange="submit()">
                  <?php for($i=1; $i<= $arr->getMaxLevel(); $i++ ) : ?>
                    <option <?= $i ===(int) $_SESSION[$arr->getName()] ? 'selected ' : '' ?>value="<?= $i ; ?>"><?= $i ; ?></option> 
                    <?php endfor ; ?>
                </select>
            </form>
        </div>
        <div class="col-auto">
            <h4><?=$arr->getName() ?></h4>
            <p><?=$arr->getDescription() ?></p>
        </div>
    </div>
<?php endforeach ; ?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
