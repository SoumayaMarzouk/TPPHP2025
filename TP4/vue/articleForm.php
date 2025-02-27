<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nouvel Article</h1>
<form action="../control/articleControl.php" method="get">
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
        <?php
        include("../model/Fournisseur.php");
                $l=Fournisseur::getAll();
                foreach($l as $f)
                    echo $f;
        ?>

    </select><br>

    <input type="submit" value="Envoyer">

</form>
<h1>Liste des articles</h1>
<table border=1>
    <tr><th>Reférence</th><th>Libellé</th><th>Prix</th><th>Quantité</th><th>Fournisseur</th></tr>
<?php
        include("../model/Article.php");
                $l=Article::getAll();
                foreach($l as $f)
                    echo $f;
        ?>
</table>
</body>
</html>