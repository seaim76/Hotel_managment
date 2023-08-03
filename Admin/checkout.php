<?php 

include("conn.php");
$rno=$_GET['rno'];
 if(mysqli_query($a,"Update room set status ='unBook' where rno=$rno"))
 {
    header("Location:rd.php");
 }




?>

