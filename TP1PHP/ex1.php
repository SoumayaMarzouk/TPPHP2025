<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des étudiants</h1>
    <ul>
    <?php
        $et=array("Ali","Med","Salma");

        foreach( $et as $x){

            echo "<li>$x</li>";
        }
    ?>
    </ul>
</body>
</html>