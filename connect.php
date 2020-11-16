<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'salisa11.mysql.database.azure.com', 'salisa11@salisa11', 'Goatmilk11', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
