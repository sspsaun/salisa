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
    <title>Comment Form</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <style>
      .w3-button {
        width: 70x;
      }
    </style>
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
