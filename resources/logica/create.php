<?php
    include("conexion.php");

    if(isset($_POST['btn-submit'])){

       $firstName = $_POST['firstName'];
       $lastName = $_POST['lastName'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $hobby = $_POST['hobby'];

       $query = "INSERT INTO user(firstName,lastName,email,phone,hobby) VALUES ('$firstName','$lastName','$email','$phone','$hobby')";

       $result = mysqli_query($connection,$query);

        if($result){
            header("Location: ../../index.php");
        }else{
            echo "ERROR";
        }

    }


?>