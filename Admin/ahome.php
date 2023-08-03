<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
   
    <style>
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
    <img src="../img/a.png" alt="">
    <h1>Welcome to Admin panel</h1>
</body>
</html>
