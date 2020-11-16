$conn = mysqli_init();
mysqli_real_connect($conn, 'mizuki01.mysql.database.azure.com', 'mizuki@mizuki01', 'Miura260344', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
