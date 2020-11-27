<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'salisa11.mysql.database.azure.com', 'salisa11@salisa11', 'Goatmilk11', 'itflab', 3306);
$name=$_POST['name'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$bmi = $weight / (($height/100)**2);
$sql="UPDATE itf SET name='$name', weight='$weight', height='$height', bmi='bmi' WHERE ID='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
