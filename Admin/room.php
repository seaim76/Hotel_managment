<?php 
require_once('conn.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
   
    <style>
       body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .adminc {
             display: flex;
            justify-content: center;
            background: gray;
          
        }
        
        .adminc ul {
            list-style: none;
            padding: 0;
        }
        
        .adminc li {
            display: inline-block;
            margin: 0 10px;
            
        }

        .adminc li a {
            text-decoration: none;
            font-size: 25px;
            margin: 0 auto;
            color: white;
            
        }
        
        h1 {
            text-align: center;
            color: green;
        }
        
        #bg-from {
            margin: 20px auto;
            width: 400px;
            padding: 20px;
            border-radius: 5px;
           
        }
        
        #bg-from table {
            width: 100%;
        }
        
        #bg-from td {
            padding: 10px;
            color: gray;
        }
        
        #bg-from input[type="text"] {
            width: 100%;
            padding: 5px;
        }
        
        #bg-from input[type="submit"] {
            width: 100%;
            padding: 10px;
            color: black;
            border: none;
            cursor: pointer;
            background-color: gray;
          
        }
        #bg-from input[type="submit"]:hover{
            background: green;
        }
      
    
    </style>
</head>
<body>
    
    <div class="adminc">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="room.php">Room Update</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="rd.php">Booking Details</a></li>
        </ul>
    </div>

    <h1>Add Room</h1>
   
    <div id="bg-from">
        <form action="room.php" method="post">
            <table>
                <tr>
                    <td>Room Number</td>
                    <td><input type="text" name="rno" placeholder="Enter room Number" title="Enter room number"></td>
                </tr>
                <tr>
                    <td>Room Type</td>
                    <td><input type="text" name="type" placeholder="Enter room Type" title="Enter room Type"></td>
                </tr>
                <tr>
                    <td>Room Price</td>
                    <td><input type="text" name="price" placeholder="Enter room price" title="Enter room Type"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
        <?php
if (isset($_POST['submit'])) {
    $rno = $_POST['rno'];
    $type = $_POST['type'];
    $p = $_POST['price'];

    if (!empty($rno) && !empty($type) && !empty($p)) {
    
        if (mysqli_query($a, "INSERT INTO room (rno, type, price) VALUES ('$rno', '$type', '$p')")) {
            echo "Data inserted successfully.";
        } else {
            echo "Data not inserted.";
        }
    } else {
        echo "Please enter data";
    }
}
?>

    </div>
</body>
</html>
