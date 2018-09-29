<!DOCTYPE html>
<html>
<head>


</head>
<body align='center'>

<form action="#" method="POST">
	DISH NAME:
	<input type="text" name="name"><br><br>
	PRICE:
	<input type="text" name="price"><br><br>
	<button type="submit" name="submit"> SUBMIT </button>
	<button type="submit" name="edit"><a href ="edit_dish_price.php">EDIT</a></button>
	<button type="submit" name="showData"><a href ="showData.inc.php" target=blank>SHOW ALL DATA</a></button>
    <button type="submit" name="todaymenu"><a href ="today_menu.php" target=blank>TODAY'S MENU</a></button>
    <button type="submit" name="todaymenu2" value="select"><a href="select_today_meal.php" target=blank>SELECT TODAY'S MENU</a></button>
    <button type="submit" name="orderin1day" value="select"><a href="order_in_a_day.php" target=blank>TODAY'S ORDERS</a></button>
</form>
<?php
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 
if(strpos($fullUrl , "info=incomplete")==true)
{ echo "did not fill fields";
exit();
}

?>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	include_once 'config.php';

	$name = $_POST["name"];
	$price = $_POST["price"];
	 
    if (empty($name) || empty($price)){
     	header('Location: enter_dish.php?info=incomplete');
     	exit();
     	
    }
    
     else {
 	

	$sql = "INSERT INTO menu (name, price) VALUES ('$name', '$price');";
	mysqli_query($mysqli, $sql);
	 
    header('Location: enter_dish.php?info=success');
	exit();
}


}
?>