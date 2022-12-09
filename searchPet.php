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
		<div class="container" style="margin-top:20px">
		<?php 				
			//Containt main PHP Form
			
		?>
		<form>			
			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-1 col-form-label">Pet</label>
				<div class="col-sm-9">
					<select id="inputState" class="select form-control">
						<option selected>Choose...</option>
						<option>All</option>
						<option>Cats</option>
						<option>Dogs</option>
					</select>
				</div>
				<div class="col-sm-2">
					<button type="submit" class="btn btn-primary">Search</button>
				</div>
			</div>					
			<div style="margin-top:20px">
				<table class="table table-striped">
					<thead>
						<tr>
						<th scope="col">#</th>
						<th scope="col">Type</th>
						<th scope="col">Name</th>
						<th scope="col">Age</th>
						<th scope="col">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Dog</td>
							<td>Otto</td>
							<td>2 Years</td>
							<td>								
								<button type="button" class="btn btn-success">Adopt</button>								
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
								<td>Cat</td>
								<td>Tom</td>
								<td>1 Month</td>
								<td>
									<button type="button" class="btn btn-success">Adopt</button>	
								</td>
							</tr>
						<tr>
							<th scope="row">3</th>
							<td >Dog</td>
							<td >Haku</td>
							<td>5 Years</td>
							<td>
								<button type="button" class="btn btn-success">Adopt</button>	
							</td>
						</tr>
					</tbody>
				</table>
			</div>				
		</form>

		<div>		

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