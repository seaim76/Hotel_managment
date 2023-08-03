<?php
// Assuming the database connection details are in "conn.php"
include("conn.php");

if (isset($_POST['sub'])) {
    $un = $_POST['un'];
    $ps = $_POST['ps'];

    if (empty($un) || empty($ps)) {
        $message = "Please enter both username and password.";
    } else {
        $query = "SELECT * FROM admin WHERE un='$un'";
        $result = mysqli_query($a, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $su = $row['un'];
            $sp = $row['ps'];

            if ($ps === $sp) {
                header("Location: ahome.php");
                exit;
            } else {
                $message = "Invalid username or password.";
            }
        } else {
            $message = "Invalid username or password.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    
    <style>
      
        
      #bg-from{
        display: flex;
        justify-content: center;
        }
        #nav{
        display: flex;
        justify-content: center;
        background: gray;
        }
        
        #nav ul {
            list-style: none;
            padding: 0;
        }
        
        #nav li {
            display: inline-block;
            margin: 0 10px;
        }

        #nav li a {
            text-decoration: none;
            font-size: 25px;
            color: white;
        }
        
        h1 {
            text-align: center;
        }



.admin {
    margin-top: 20px;
    padding: 20px;
   
    border-radius: 5px;
    background-color: gray;
    display: inline-block;
}

.admin input {
    margin: 5px 0;
    padding: 8px;
    border: 1px solid black;
    border-radius: 4px;
    text-align: center;
}
.t-d form{
    background: white;
    align-items: center;
    
}


 
    </style>
</head>
<body>
    <center>
    <div id="full">
        <div class="header">
          
            <div id="nav">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                   
                  
                </ul>
            </div>
        </div>
        <div class="admin">
            <form action="index.php" method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="un" placeholder="Enter User Name" title="Enter user name"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="ps" placeholder="Enter User Password" title="Enter user password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="sub" value="submit"></td>
                    </tr>
                </table>
            </form>

            <?php 
                if (!empty($message)) {
                    echo "<p >$message</p>";
                }
            ?>
        </div>
    </div>
    </center>
</body>
</html>
