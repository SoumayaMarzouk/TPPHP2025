<?php
include("../model/Article.php");
include("../model/Fournisseur.php");
if(isset($_GET['add'])){
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
    Article::insert($art);

    //echo "<table border=1><tr><th>Ref</th><th>Libelle</th><th>Prix</th><th>Quantité</th><th>Fournisseurs</th></tr>";
    //echo "$art </table>";
}
}
else if(isset($_GET['up'])){

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
        Article::update($art);

}
}else if(isset($_GET['del'])){
    Article::delete($_GET["ref"]);

}
   




header("location:../vue/articleForm.php");






?>