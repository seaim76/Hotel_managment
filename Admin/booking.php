<?php 
include("conn.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        .adminc {
            display: flex;
            justify-content: center;
            background-color: gray;
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
            color: white;
        }
        
        h1 {
            text-align: center;
            color: green;
        }
        
        img {
            display: block;
            margin: 0 auto;
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
 <h1> Welcome to Booking Panel</h1>



 <table>
    <tr>
        <th>Name</th>
        <th >Room No</th>
        <th>City</th>
        <th >District</th>
        <th >State</th>
        <th>Check in Date</th>
        <th >Check out Date</th>
        <th>Member</th>
    </tr>
    <?php 
    $q1 = "SELECT * FROM form ORDER BY id ASC";
    $run = mysqli_query($a, $q1);
    
    while ($row = mysqli_fetch_array($run)) {
        $name = $row['name'];
        $idno = $row['id'];
        $city = $row['city'];
        $dis = $row['dis'];
        $state = $row['state'];
        $cidate = $row['cindate'];
        $coutdate = $row['coutdate'];
        $m = $row['member'];
            ?>
        
     
  <tr>
        <th ><?php echo$name; ?></th>
        <th ><?php echo$idno; ?></th>
        <th ><?php echo$city; ?></th>
        <th ><?php echo$dis; ?></th>
        <th ><?php echo$state; ?></th>
        <th ><?php echo$cidate; ?></th>
        <th ><?php echo$coutdate; ?></th>
        <th ><?php echo$m; ?></th>
    </tr>
    <?php 
        }
    ?>
</table>




        
  
</body>
</html>
