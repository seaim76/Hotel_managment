<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Footer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
    <footer id="footer">
        <div class="footer-content">
            <div class="footer-logo">
                <a href="index.php"><img src="./img/logo.jpg" alt="Footer Logo"></a>
            </div>
            <div class="footer-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="registration.php">Book</a></li>
                    <li><a href="#">Our Hotel</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-info">
            <p>Contact Info:</p>
            <ul>
                <li>Email: info@yourhotel.com</li>
                <li>Phone: +1 123-456-7890</li>
                <li>Address: 123 Main Street, City, Country</li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date("Y"); ?> Your Hotel. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
