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

	<!-- Approval JavaScript -->
	<script src="Scripts/history.js"></script>



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
			?>
			<!-- List group -->
			<div class="list-group p-3" id="myList" role="tablist">
				<a class="list-group-item list-group-item-action active" data-toggle="list" href="#a1" role="tab">Zeus</a>
				<a class="list-group-item list-group-item-action" data-toggle="list" href="#a2" role="tab">Thor</a>
				<a class="list-group-item list-group-item-action" data-toggle="list" href="#a3" role="tab">Odin</a>
				<a class="list-group-item list-group-item-action" data-toggle="list" href="#a4" role="tab">Tesseus</a>
			</div>

			<!-- Tab panes -->
			<div class="tab-content p-3">
				<div class="tab-pane active" id="a1" role="tabpanel">
					<div class="row">
						<div class="col-sm ">
							<p>Name: Zeus</p>
							<p>Age: 3 years</p>
							<p>Person: Luke Skywalker</p>
							<p>Email:luke@sky.com</p>
							<p>Address: 123 asd qwererw</p>
							<p>Celphone: 123 123 1234 </p>
						</div>
						<div class="col-sm ">
							<img src="img/pet1img.jpg" alt="Card image cap">
						</div>
					</div>
				</div>
				<div class="tab-pane" id="a2" role="tabpanel">
					<div class="row">
						<div class="col-sm ">
							<p>Name: Tesseus</p>
							<p>Age: 10 years</p>
							<p>Person: ASD asd </p>
							<p>Email:sa@s.com</p>
							<p>Address: 156 artgy d</p>
							<p>Celphone: 123 123 1234 </p>
						</div>
						<div class="col-sm ">
							<img src="img/pet1img.jpg" alt="Card image cap">
						</div>
					</div>

				</div>
				<div class="tab-pane" id="a3" role="tabpanel">
					<div class="row">
						<div class="col-sm ">
							<p>Name: Thod</p>
							<p>Age: 2 years</p>
							<p>Person: Anakin Skywalker</p>
							<p>Email:123@32.com</p>
							<p>Address: 432 asd qwererw</p>
							<p>Celphone: 123 123 4321 </p>
						</div>
						<div class="col-sm ">
							<img src="img/pet1img.jpg" alt="Card image cap">
						</div>
					</div>
				</div>
				<div class="tab-pane" id="a4" role="tabpanel">
					<div class="row">
						<div class="col-sm ">
							<p>Name: Zeus</p>
							<p>Age: 3 years</p>
							<p>Person: Luke Skywalker</p>
							<p>Email:luke@sky.com</p>
							<p>Address: 123 asd qwererw</p>
							<p>Celphone: 123 123 1234 </p>
						</div>
						<div class="col-sm ">
							<img src="img/pet1img.jpg" alt="Card image cap">
						</div>
					</div>

				</div>
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