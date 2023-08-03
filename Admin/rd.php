<?php 
include("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
  
  <style>
    body {
        font-family: Arial, sans-serif;
       
    }

    .adminc {
        display: flex;
        justify-content: center;
        padding: 10px;
        background-color: gray;
    }

    .adminc li {
        display: inline-block;
        margin: 0 10px;
    }

    .adminc li a {
        text-decoration: none;
        font-size: 25px;
        color: white;
    }

    h1 {
        text-align: center;
    }

    table {
    width: 80%;
    margin: 20px auto;
}

th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
}

th {
    background-color: white;
}


  
</style>
</head>
<body>
    
    <div class="adminc">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="room.php">Room Update</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="rd.php">Room Details</a></li>
        </ul>
    </div>  

    <table>
        <tr>
            <th>Room No</th>
            <th>Room Type</th>
            <th>Price</th>
            <th>Status</th>
            <th>Options</th>
        </tr>
        <?php 
            $q1 = "select * from room";
            $run = mysqli_query($a, $q1);
            while ($row = mysqli_fetch_array($run)) {
                $rno = $row['rno'];
                $type = $row['type'];
                $price = $row['price'];
                $status = $row['status'];
        ?>
        <tr>
            <td><?php echo $rno?></td>
            <td><?php echo $type?></td>
            <td><?php echo $price?></td>
            <td><?php echo $status?></td>
            <td><a href="checkout.php?rno=<?php echo $rno;?>">Checkout</a></td>
        </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html>
