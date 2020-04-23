<?php

    include ("conexion.php");

    $idUser = $_GET['id'];

    $query = "DELETE FROM user where idUser = '$idUser'";

    $result = mysqli_query($connection,$query);

    if($result){
        header("Location: ../../index.php");
    }else{
        echo "ERROR";
    }


?>