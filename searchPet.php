<?php
	session_start();
	//to check if user is loggedd in if not redirect them
	//include('isLogin.php');

	if(isset($_POST['adopt'])){
		include('dbconnection.php');
		$query = "update pet set idstatus = 2,idUser = " . $_SESSION['user']['id'] .  " where idpet = " .$_POST['adopt']. "";
		$insert = mysqli_query($db,$query);
		if ($insert) {
			// Show  modal
			echo 
			'<div class="alert alert-danger alert-dismissible fade show" role="alert" id="deniedMsg">
				Adopted!
			</div>';
		} else {
			echo "Error: " . $query . "<br>" . $conn->error;
		}

	}

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
<body style="background-color: #051f44">
	<header>
		<?php 
			require_once('Layouts/header.php');
		?>	
	</header>

	<main>	
		<div class="container" style="margin-top:20px">
		
		<form method="Post" style="background-color: white">	
		<br>					
			<div class="form-group row" style="margin-left:20px">
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
			<div style="margin-top:20px;" style="margin-left:20px"">
			<?php
				include('dbconnection.php');
				$query = "select PET.*,pettype.nametype from PET inner join pettype on pet.idTypePet = pettype.idTypePet where idstatus = 1";
    			$result = mysqli_query($db,$query );

				echo "<table class='table table-striped'>
				<tr>
					<th scope='col'>#</th>
					<th scope='col'>Type Pet</th>
					<th scope='col'>Name</th>
					<th scope='col'>Age</th>
					<th scope='col'>Actions</th>
				</tr>";

				while($row = mysqli_fetch_array($result))
				{
					echo "<tr>";
						echo "<td>" . $row['idPet'] . "</td>";
						echo "<td>" . $row['nametype'] . "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['age'] . "</td>";				
						echo "<td><button type='submit' name='adopt' class='btn btn-success' value=" . $row['idPet'] . ">Adopt</button></td>";
					echo "</tr>";
				}

				echo "</table>";
			?>
				<!--<table class="table table-striped">
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
-->
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