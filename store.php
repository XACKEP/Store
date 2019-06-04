<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<meta charset="utf-8">

	
</head>
	<!--<form action="insert.php" method="POST">
		<input type="" name="img">
		<input type="" name="name">
		<input type="" name="price">
		<button>Создать</button>
	</form>-->

	<?php

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_pn_10');
	$query = mysqli_query($connect, 'SELECT * FROM store');
	

?>
<div class="d-flex">
<?php
	for($i=0;$i<$query->num_rows; $i++){
		$logo = $query->fetch_assoc();
		echo '<div class="col-3">';
		echo '<img src="' . $logo['img'] . '" class="col-12" height="400px">';
		echo '<h2>' . $logo['name'] . '</h2>';
		echo '<p>' . $logo['price'] . ' Рублей</p>';
		echo '<button>Купить</button>'; 
		echo '</div>';
		?>
		<!--<form action="delete.php" method="POST">
			<?php echo '<input type="hidden" name="id" value="' . $logo['id'] . '">' ?>
			<button>Удалить</button>
		</form>


			<form method="POST" action="change.php">
			<input type="" name="img">
			<input type="" name="name">
			<input type="" name="price">
			<?php echo '<input type="hidden" name="id" value="' . $logo['id'] . '">' ?>
		<button>Обновить</button>
	</form>-->

		<?php

	};
		?>
	</div>
</body>
</html>