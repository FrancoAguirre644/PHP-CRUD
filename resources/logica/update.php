<?php
    include ("conexion.php");

    $idUser = $_GET['id'];

    if (isset($_POST['btn-update'])){
        
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $hobby = $_POST['hobby'];

        $query = "UPDATE user SET firstName = '$firstName', lastName = '$lastName', email ='$email',phone='$phone', hobby = '$hobby' where idUser = '$idUser' ";
        $result = mysqli_query($connection,$query);

        if($result){
            header("Location: ../../index.php");
        }else{
            echo ("ERROR UPDATING");
        }

    }else{
        
        $query = "SELECT * FROM user where idUser = '$idUser'";
        $result = mysqli_query($connection,$query);
        $row = mysqli_fetch_array($result);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="../js/main.js"></script>

    <title>Document</title>
</head>

<body>
    <div class="container">
        
        <form action="update.php?id=<?php echo $row[0]?>" method="POST" onsubmit="return validate()">
            <h2>Update your dates</h2>
            <div class="container-input"><input type="text" id="firstName" name="firstName" value="<?php echo $row[1]?>" placeholder="Enter your first name">
                <div class="border-animation"></div>
            </div>
            <div class="container-error" id="firstNameError"></div>

            <div class="container-input"><input type="text" id="lastName" name="lastName" value="<?php echo $row[2]?>" placeholder="Enter your last name"></div>
            <div class="container-error" id="lastNameError"></div>

            <div class="container-input"><input type="text" id="email" name="email" value="<?php echo $row[3]?>" placeholder="Enter your email"></div>
            <div class="container-error" id="emailError"></div>
            
            <div class="container-input"><input type="text" id="phone" name="phone" value="<?php echo $row[4]?>" placeholder="Enter your your phone"></div>
            <div class="container-error" id="phoneError"></div>

            <div class="container-input"><input type="text" id="hobby" name="hobby" value="<?php echo $row[5]?>" placeholder="Enter your last hobby"></div>
            <div class="container-error" id="hobbyError"></div>


            <input class="btn-submit" type="submit" name="btn-update" value="Update">

        </form>
    </div>
</body>

</html>