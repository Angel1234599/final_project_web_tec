<?php
session_start();

include('dbconnection.php');
// Select orders from db
$query = "SELECT p.id as petId, p.name as petName, p.age as petAge, p.approved as petApproved, u.id as userId, u.name as userName, u.address as userAddress, u.email as userEmail, u.phone_number as userPhone\n"

    . "FROM pet as p\n"

    . "JOIN user as u \n"

    . "ON u.id = p.id;";

$result = $db->query($query);
$pets = $result->fetch_all(MYSQLI_ASSOC);
$db->close();
print_r($pets);
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

			if (isset($pets)) {
				echo '<div class="list-group p-3" id="myList" role="tablist">';
				$tab_id = 1;
				foreach($pets as $row)
				{
					echo '<a class="list-group-item list-group-item-action '.($tab_id == 1?"active":"").'" data-toggle="list" href="#a'.$tab_id.'" role="tab">'
					. $row['petName'] 
					.'</a>';
					$tab_id ++;
				}
				echo '</div>';

				$tab_id = 1;
				foreach($pets as $row)
				{
					echo '<div class="tab-content p-3">
				<div class="tab-pane '.($tab_id == 1?"active":"").'" id="a'.$tab_id.'" role="tabpanel">
					<div class="row">
						<div class="col-sm ">';
						echo '	<p>Name: '.$row['petName'].'</p>';
						echo '	<p>Age: '.$row['petAge'].'year(s)</p>';
						echo '	<p>Person Name: '.$row['userName'].'</p>';
						echo '	<p>Email: '.$row['userEmail'].'</p>';
						echo '	<p>Address: '.$row['userAddress'].'</p>';
						echo '	<p>Phone: '.$row['userPhone'].'</p>';
					echo'</div>
						<div class="col-sm ">
							<img src="img/pet1img.jpg" alt="Card image cap">
						</div>
					</div>
				</div>';
					$tab_id++;
				}
				echo '</div>';

				

				
				/*
				$tab_id = 1;

				foreach($pets as $row)
				{

					echo '<div class="tab-pane '.($tab_id == 1?"active":"")
					.'" id="a'.$tab_id.'" role="tabpanel">
					<div class="row">
						<div class="col-sm ">';
					echo '	<p>Name: '.$row['petName'].'</p>';
					echo '	<p>Age: '.$row['petAge'].'year(s)</p>';
					echo '	<p>Person Name: '.$row['userName'].'</p>';
					echo '	<p>Email: '.$row['userEmail'].'</p>';
					echo '	<p>Address: '.$row['userAddress'].'</p>';
					echo '	<p>Phone: '.$row['userPhone'].'</p>';
					echo '	</div>';
					echo '	<div class="col-sm ">';
					echo '		<img src="img/pet1img.jpg" alt="Card image cap">';
					echo '	</div>';
					echo '</div>';
					echo '</div>';

					$tab_id++;
				}
				*/
				

			}
			
			?>
			<!-- List group  -->
			<?php
			/*
			echo
			'<div class="list-group p-3" id="myList" role="tablist">
				<a class="list-group-item list-group-item-action active" data-toggle="list" href="#a1" role="tab">Zeus</a>
				<a class="list-group-item list-group-item-action" data-toggle="list" href="#a2" role="tab">Thor</a>
				<a class="list-group-item list-group-item-action" data-toggle="list" href="#a3" role="tab">Odin</a>
				<a class="list-group-item list-group-item-action" data-toggle="list" href="#a4" role="tab">Tesseus</a>
			</div>';
			
			echo '<div class="tab-content p-3">
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
			</div>';
			*/
			?>

		</div>


	</main>

	<footer>
		<?php
		include_once('Layouts/footer.php');
		?>
	</footer>
</body>

</html>