<?php

	include_once 'config.php';
    session_start();
   
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
</body>
</html>

<?php
echo "WHATS YOUR PAYMENT MODE";
echo '<button class="poll" name="offline" method="POST"><a href="payment4.php">OFFLINE</a></button>';
echo '<button class="poll"><a href="https://www.payumoney.com/paybypayumoney/#/3557DBE00F790DC0BA9E64FA05925A84">ONLINE</button>';
?>
