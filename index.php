<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <link rel="stylesheet" href="resources/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <div class="header">
            <h2>CRUD Database</h2>
            <a href="create.html"><button class="btn-add"><i class="fas fa-plus" style="margin-right: 5px; font-size:14px;"></i> Add item</button></a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Hobby</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <?php
                include ("resources/logica/conexion.php");
                $query = "SELECT * FROM user";
                $result = mysqli_query($connection,$query);

                while($row = mysqli_fetch_array($result)){

            ?>

            <tbody>
                <tr>
                    <td><?php echo $row['1']?></td>
                    <td><?php echo $row['2']?></td>
                    <td><?php echo $row['3']?></td>
                    <td><?php echo $row['4']?></td>
                    <td><?php echo $row['5']?></td>
                    <td><a href="resources/logica/update.php?id=<?php echo $row[0]?>">Editar</a>
                        <a href="resources/logica/delete.php?id=<?php echo $row[0]?>">Eliminar</a></td>
                </tr>
            </tbody>

            <?php 
                }
            ?>

        </table>
    </div>
</body>

</html>