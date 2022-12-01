<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>

	<title> Plantilla con Bootstrap</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- BOOTSTRAP-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="Styles/styles.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->

	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="bootstrap/js/bootstrap.bundle.js"></script>


</head>

<body>
	<header>
		<?php
		require_once('Layouts/header.php');
		?>
	</header>

	<main>
		<div class="container">
			<?php
			//Containt main PHP Form

			?>
			<!--Image file -->



			<div class="imageanddes">

				<div class="row1images">
					<img src="img/pet1img.jpg" alt="This is a dog image" class="r1images">
					<p>Dog 1</p>
					<p>Description : Very friendly</p>


				</div>

				<div class="row1images">
					<img src="img/pet2img.jpg" alt="This is a dog image" class="r1images">
					<p>Dog 2</p>
					<p>Description : Very active</p>

				</div>

				<!-- <img src="img/pet2img.jpg" alt="petimage2" width="320" height="240"> -->


			</div>



		</div>
	</main>

	<footer>
		<?php
		include_once('Layouts/footer.php');
		?>
	</footer>
</body>

</html>