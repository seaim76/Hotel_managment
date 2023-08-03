<!-- //Data from index.php file -->
<?php 
include("conn.php");
$r = 0;
if (isset($_GET['D1'], $_GET['ci'], $_GET['co'])) {
 
    $destination = $_GET['D1'];
    $r = $_GET['room'];
    $ci = $_GET['ci'];
    $co = $_GET['co'];
} else {
    // echo "Please enter all information.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>

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
            color:white
        }
        
        h1 {
            text-align: center;
        }
        
      
 
    </style>
</head>
<body>
    <div class="header">
        <div id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="registration.php">Book</a></li>
                <li><a href="./Admin/index.php">Admin</a></li>
            </ul>
        </div>
    </div>
    <div id="bg-from">
       
    <form action="registration.php" method="post">
    
    <table>
    <?php
     $q1 = "SELECT * FROM room WHERE status='unBook'";
     $run = mysqli_query($a, $q1);
     $row=mysqli_fetch_array($run);
     $rno=$row['rno'];

$q = "SELECT * FROM room WHERE status='unBook'";
$run = mysqli_query($a, $q);

if ($run) {
    $num = mysqli_num_rows($run);
    // echo $num;
} 
if($r<=$num){
    ?>
    
    <tr>
                <td>Status</td>
                <td><input type="text" name="status" value="Avaliable" disabled="disabled" title="status"></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" placeholder="Enter name" title="Name"></td><br>
                <td>You Book :</td>
                <td><input type="text" name="idno"  value="<?php echo $r;?>" title="Room"></td>

            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address" placeholder="Enter Your Address" title="Address"></td>
            </tr>
            <tr>
                <td>City</td>
                <td>
                    <select name="city">
                        <option>---Select----</option>
                        <option>Dhaka</option>
                        <option>Gazipur</option>
                        <option>Chattogram</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>District</td>
                <td>
                    <select name="dis">
                        <option>-----select----</option>
                        <option>Dhaka</option>
                        <option>Gazipur</option>
                        <option>Chattogram</option>
                    </select>
                </td>
            </tr>
            <tr>
            <td>State</td>
            <td>
            <select name="state">
                        <option>-----select----</option>
                        <option>Dhaka</option>
                        <option>Chattogram</option>
                        <option>Rajshahi</option>

                    </select> 
            </td>
            </tr>
            <tr>
                <td>Enter email</td>
                <td><input type="text" name="email" placeholder="Enter E-mail" title="Email"></td>
            </tr>
            <tr>
                <td>Checking Date</td>
                <td><input type="text" name="coin" value="<?php echo $ci;?>" title="check in"></td>
                <td>CheckOut Date</td>
                <td><input type="text"name="coout"  value="<?php echo $co;?>" title="check out"></td>
            </tr>
            <tr>
                <td>Enter Member</td>
                <td><input type="text" name="members" placeholder="Enter Member" title="Members"></td>
            </tr>
            
            <td colspan="1"><input type="submit" name="submit" value="Submit"></td>

<?php }
else{
    ?>
     <tr>
                <td>Status</td>
                <td><input type="text" name="status" value="Not-Avaliable" disabled="disabled" title="status"></td>
            </tr>
    <?php 
}

?>
         
           
        </table>
        </form>
        <?php 
        if(isset($_POST['submit']))
        {
           $name=$_POST['name'];
           $idno=$_POST['idno'];
           
           $city=$_POST['city'];
           $dis=$_POST['dis'];
           $state=$_POST['state'];
           $email=$_POST['email'];
           $coin=$_POST['coin'];
           $coout=$_POST['coout'];
           $m=$_POST['members'];
          

           if(mysqli_query($a,"insert into form(name,city,dis,email,state,cindate,coutdate,member,id) value ('$name','$city','$dis','$email','$state','$coin','$coout','$m','$idno')"))
           {
            mysqli_query($a,"Update room set status ='Book' where rno=$rno");
            header("Location:complete.php");
           }
           else{
            echo "Please Submit Information";
           }
        
        }
        
        ?>
    </div>
</body>
</html>
