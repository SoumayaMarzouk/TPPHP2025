<?php
if (isset($_POST['login']) && isset($_POST['pass'])){
    $l=$_POST['login'];
    $p=$_POST['pass'];
    if($l=="admin" && $p=="admin"){
        echo "<h2>Vous etes connecté</h2>";
    }
    else
        header("location:ex1.html");
}
else
    echo "il faut passer par le formulaire";

?>