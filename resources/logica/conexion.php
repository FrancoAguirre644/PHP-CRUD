<?php
    $server = "LocalHost";
    $user = "root";
    $pass = "42385689a";
    $db = "crud";

    $connection = mysqli_connect($server,$user,$pass,$db);

    if(!$connection){
        echo "Conexion Fallida";
    }

?>