<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_pn_10');
	mysqli_query($connect, "INSERT INTO store(img, name, price) VALUES ('images/" . $_FILES['img']['name'] ."', '" . $_POST['name'] . "','" . $_POST['price'] . "')");
	move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);
	header('Location: http://aaaapple/store/admin.php');
	 ?>
