<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_pn_10');
	mysqli_query($connect, "UPDATE store SET img='" . $_POST['img'] . "', name='" . $_POST['name'] ."', price='" . $_POST['price'] . "' WHERE id ='" . $_POST['id'] . "'");
	header('Location: http://aaaapple/store/admin.php');
	 ?>