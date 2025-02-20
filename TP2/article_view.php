

<?php
$ref="";
$four=Array();
$error_ref="";
$error_lib="";
if (isset($_GET['ref']) && isset($_GET['lib'])&& isset($_GET['prix'])&& isset($_GET['qt'])){
    $ref=$_GET['ref'];
    $lib=$_GET['lib'];
    $qt=$_GET['qt'];
    if (isset($_GET['four'])) $four=$_GET['four'];
    $pv=$_GET['pv'];
    $prix=$_GET['prix'];
    if (!empty($ref) && !empty($lib)){
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
else{
    if (empty($ref)) $error_ref="la réference ne doit pas etre vide";
    if (empty($lib)) $error_lib="le libellé ne doit pas etre vide";
    if (!isset($four) or empty($four)) $error_lib="Tu doit choisir un fournisseur";
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nouvel Article</h1>
<form action="" method="get">
    <label for="ref">Référence</label>
    <input type="text" name="ref" value="<?=$ref?>"><?="<span style='color:red;'>$error_ref</span>"?><br>
    <label for="lib">Libéllé</label>
    <input type="text" name="lib"><?=$error_lib?><br>
    <label for="prix">Prix</label>
    <input type="text" name="prix"><br>
    <label for="qt">Quantité</label>
    <input type="text" name="qt"><br>
    <label for="four">Fournisseur</label>
    <select name="four[]" multiple>
        <option value="f1" <?php if(in_array("f1",$four)) echo "selected"; ?>>Fournisseur1</option>
        <option value="f2" <?php if(in_array("f2",$four)) echo "selected"; ?>>Fournisseur2</option>
        <option value="f3" <?php if(in_array("f3",$four)) echo "selected"; ?>>Fournisseur3</option>
    </select><br>
    <label for="pv">Point de vente</label><br>
    <input type="checkbox" name="pv[]" value="sfax" <?php if(in_array("sfax",$pv)) echo "checked"; ?> >Sfax<br>
    <input type="checkbox" name="pv[]" value="sousse" <?php if(in_array("sousse",$pv)) echo "checked"; ?>>Sousse<br>
    <input type="checkbox" name="pv[]" value="tunis" <?php if(in_array("tunis",$pv)) echo "checked"; ?>>Tunis<br>
    <input type="submit" value="Envoyer">

</form>
</body>
</html>

<?php
    }

    ?>
<?php


}
else
    {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nouvel Article</h1>
<form action="" method="get">
    <label for="ref">Référence</label>
    <input type="text" name="ref"><br>
    <label for="lib">Libéllé</label>
    <input type="text" name="lib"><br>
    <label for="prix">Prix</label>
    <input type="text" name="prix"><br>
    <label for="qt">Quantité</label>
    <input type="text" name="qt"><br>
    <label for="four">Fournisseur</label>
    <select name="four[]" multiple>
        <option value="f1" selected>Fournisseur1</option>
        <option value="f2">Fournisseur2</option>
        <option value="f3">Fournisseur3</option>
    </select><br>
    <label for="pv">Point de vente</label><br>
    <input type="checkbox" name="pv[]" value="sfax" checked>Sfax<br>
    <input type="checkbox" name="pv[]" value="sousse">Sousse<br>
    <input type="checkbox" name="pv[]" value="tunis">Tunis<br>
    <input type="submit" value="Envoyer">

</form>
</body>
</html>

<?php
    }

    ?>