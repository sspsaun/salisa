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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>

</html>
