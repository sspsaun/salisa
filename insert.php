<?php
require('connect.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $bmi = $weight / (($height/100)**2);

        $sql = "INSERT INTO itf (name, weight, height, bmi) value ('$name','$weight', '$height', '$bmi')";

        if(mysqli_query($conn, $sql)){
            echo "New record insert successfully";
            echo "<a href='show.php'>back to home page</a>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <form action="insert.php" method="post">
        <h1>Name</h1>
        <input type="text" name="name">
        <h1>Weight</h1>
        <input type="text" name="weight">
        <h1>Height</h1>
        <input type="text" name="height">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>
