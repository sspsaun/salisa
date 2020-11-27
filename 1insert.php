<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'salisa11.mysql.database.azure.com', 'salisa11@salisa11', 'Goatmilk11', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = "INSERT INTO guestbook (Name , Comment) VALUES ('$name', '$comment')";


if (mysqli_query($conn, $sql)) {
     echo "<script>alert('New record created successfully')</script>";
      echo "<script>window.location='show.php'</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
