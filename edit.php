<?php
include("connect.php");
    $id=$_GET['id'];
    $infosql = "SELECT * FROM itf WHERE ID = '".$id."'";
    $inforesult = mysqli_query($conn,$infosql);
    $res = mysqli_fetch_array($inforesult);
    $weight = $_POST['weight'];
    $height = $_POST['height'];
 if(isset($_POST['submit'])){
    
    $update = "UPDATE itf SET weight = '".$weight."', height = '".$height."' WHERE itf.`ID` = '".$id."';";  
    $result= mysqli_query($conn,$update);
    if($result){
        echo "<script>alert('แก้ไขเสร็จสิ้น')</script>";
        echo "<script>window.location='show.php'</script>";

    }else{
        echo "<script>alert('error')</script>";
        echo "<script>window.location='show.php'</script>";

    }
 }

?>
<html>
    <head>
        <style>
            textarea{
                resize:none;
            }
        </style>
    </head>
    <body>
    <form method = "POST" id="CommentForm" >
    Name:<br>
    <input type="text" name = "weight" value="<?php echo $res['weight'];?>"> <br>
    Comment:<br>
    <input type="text" name="height" value="<?php echo $res['height'];?>"><br>
    
    <input type="submit" name="submit">
  </form> 
    </body>
    
</html>
