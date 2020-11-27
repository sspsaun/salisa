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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"">
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
