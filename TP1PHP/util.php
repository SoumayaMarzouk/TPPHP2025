<?php
    function verif($moy){
        if ($moy<10)
            return "red";
        else
            return "green";
    }

    $moy=array("Ali"=>12,"Med"=>15,"Salma"=>9);
?>