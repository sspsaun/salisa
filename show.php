<html>
<head>
    <title>ITF</title>
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
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'salisa11.mysql.database.azure.com', 'salisa11@salisa11', 'Goatmilk11', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM itf');
?>
<br>
<div class="container" bg-yellow mx-auto rounded-lg shadow mt-3 p-4 mb-3">
    <table class = "table table-bordered table-hover" width="1500" align="center" border="1">
        <thead class="thead-dark">
    <tr>
        <th width="300"> <div align="center">ชื่อ</div></th>
        <th width="300"> <div align="center">น้ำหนัก</div></th>
        <th width="300"> <div align="center">ส่วนสูง</div></th>
        <th width="300"> <div align="center">bmi</div></th>
        <th width="300"> <div align="center">การจัดการ</div></th>
    </tr>
    </thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
        <tbody>
                <tr>
            <td><?php echo $Result['name'];?></td>
            <td><?php echo $Result['weight'];?></td>
            <td><?php echo $Result['height'];?></td>
            <td><?php echo $Result['bmi'];?></td>
            <td align="center">
                <a href="edit.php?ID=<?php echo $Result['ID']?>" class="btn btn-outline-success" >UPDATE</a>
                </tr>
        </tbody>
<?php
}
?>
    </table>
    <button type="button" class="btn btn-outline-warning" onclick ="window.location.href='insert.php'">ADD</button> 
<?php
mysqli_close($conn);
?>
    </body>
</html>
