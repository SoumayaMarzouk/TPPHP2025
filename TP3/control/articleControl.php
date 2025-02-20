<?php
include("../model/Article.php");
include("../model/Fournisseur.php");
if (isset($_GET['ref']) && isset($_GET['lib'])&& isset($_GET['prix'])&& isset($_GET['qt'])&& isset($_GET['four'])){
    $ref=$_GET['ref'];
    $lib=$_GET['lib'];
    $qt=$_GET['qt'];
    $four=$_GET['four'];
    $prix=$_GET['prix'];
    $listFour=Array();
    foreach($four as $f){
        echo $f;
        $fournisseur=new Fournisseur($f,"");
        $listFour[]=$fournisseur;
    }

    $art=new Article($ref,$lib,$qt,$prix,$listFour);

    echo "<table border=1><tr><th>Ref</th><th>Libelle</th><th>Prix</th><th>Quantité</th><th>Fournisseurs</th></tr>";
    echo "$art </table>";

}
else
    echo "utilisation incorrect";




?>