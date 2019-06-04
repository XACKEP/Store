<?php 
$connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_pn_10');
	mysqli_query($connect, "DELETE FROM store WHERE id = '" . $_POST['id'] . "'");
		header('Location: http://aaaapple/store/admin.php');
?> 