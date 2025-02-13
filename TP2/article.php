<?php
if (isset($_GET['ref']) && isset($_GET['lib'])&& isset($_GET['prix'])&& isset($_GET['qt'])&& isset($_GET['four'])&& isset($_GET['pv'])){
    $ref=$_GET['ref'];
    $lib=$_GET['lib'];
    $qt=$_GET['qt'];
    $four=$_GET['four'];
    $pv=$_GET['pv'];
    $prix=$_GET['prix'];
    echo "<h1>Description article</h1>";
    echo "<ul><li>Réference:$ref</li><li>Libéllé:$lib</li><li>Prix:$prix</li><li>Quantité:$qt</li>";
    echo "<li>Liste des fournisseurs<ul>";
    foreach($four as $f){
        echo "<li>$f</li>";
    }
    echo "</ul></li>";
    echo "<li>Liste des point de vente<ul>";
    foreach($pv as $pve){
        echo "<li>$pve</li>";
    }
    echo "</ul></li>";
}
else
    echo "utilisation incorrect";




?>