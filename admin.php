

	<meta charset="utf-8">

	<form action="insert.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="img">
		<input type="" name="name" placeholder ="name">
		<input type="" name="price" placeholder ="price">
		<button>Создать</button>
	</form>


	<?php

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'sasha_pn_10');
	$query = mysqli_query($connect, 'SELECT * FROM store ORDER BY id DESC');
	


	for($i=0;$i<$query->num_rows; $i++){
		$logo = $query->fetch_assoc(); 
		echo '<img src="' . $logo['img'] . '">';
		echo '<h2>' . $logo['name'] . '</h2>';
		echo '<p>' . $logo['price'] . '</p>';
		echo '<button>Купить</button>'; ?>


		<form action="delete.php" method="POST">
			<?php echo '<input type="hidden" name="id" value="' . $logo['id'] . '">' ?>
			<button>Удалить</button>
		</form>


			<form method="POST" action="change.php">
			<input type="" name="img">
			<input type="" name="name">
			<input type="" name="price">
			<?php echo '<input type="hidden" name="id" value="' . $logo['id'] . '">' ?>
		<button>Обновить</button>
	</form>

		<?php

	};
		?>