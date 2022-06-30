<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<center>
    <a href="https://www.instagram.com/marwikarifattul/" target="_blank">
        <img src="images/Contact.png" alt="" width="600" height="100" class="img-responsive">
    </a>
    <br>
    <br>
    <p style="font-size: 20px;">To get the other interesting features, please <a href="https://www.instagram.com/marwikarifattul/" target="_blank" style="text-decoration: none;">contact us</a>
    </p>
</center>
</body>
</html>