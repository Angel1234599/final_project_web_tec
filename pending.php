
<?php
session_start();
include('dbconnection.php');

// Posted approve
if (isset($_POST['approve']))
{
	// Update query to confirm adoption
	$sql = "UPDATE `pet` \n"
    . "SET idStatus= 3\n"
    . "WHERE idPet = ".$_POST['idPet'].";";
	if ($db->query($sql) === TRUE) {
		// Show  modal
        echo 
		'<div class="alert alert-success alert-dismissible fade show" role="alert" id="successMsg">
			Adoption approved!
		</div>';
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
// Posted disapprove
else if (isset($_POST['disapprove']))
{
	// Update query to make pet available
	$sql = "UPDATE `pet` \n"
    . "SET idStatus= 1, idUser = null \n"
    . "WHERE idPet = ".$_POST['idPet'].";";
	if ($db->query($sql) === TRUE) {
		// Show  modal
        echo 
		'<div class="alert alert-danger alert-dismissible fade show" role="alert" id="deniedMsg">
			Adoption denied!
		</div>';
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
}
$query = "SELECT p.idPet as petId, p.name as petName, p.age as petAge, status.namestatus as petStatus, type.nametype as petType, u.id as userId, u.name as userName, u.email as userEmail, u.phone_number as userPhone, u.address as userAddress \n"

    . "FROM `pet` as p\n"

    . "JOIN user as u\n"

    . "ON p.iduser = u.id\n"

    . "JOIN pettype as type \n"

    . "ON type.idTypePet = p.idTypePet\n"

    . "JOIN statuspet as status\n"

    . "ON status.idStatus = p.idStatus\n"

    . "WHERE p.idStatus = 2;";
$result = $db->query($query);
$pets = $result->fetch_all(MYSQLI_ASSOC);
$db->close();
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
	<script src="Scripts/approval.js"></script>



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
			if (isset($pets)) 
			{
				echo '<div class="row">';
				foreach($pets as $row)
				{
					
					echo '
					<div class="col-sm p-3">
						<!-- Card content-->
						<div class="card" style="width:18rem;">';
						// Show image corresponding the pet type
						if ($row['petType'] == 'cat')
						{
							echo '<img class="card-img-top" src="https://cdn-icons-png.flaticon.com/512/616/616430.png" alt="Card image cap">';
						}
						else
						{
							echo '<img class="card-img-top" src="https://cdn-icons-png.flaticon.com/512/2171/2171990.png" alt="Card image cap">';
						}
							echo '<div class="card-body">';
								echo '<h5 class="card-title">'.$row['petName'].'</h5>';
								echo '<p class="card-text">Age: '.$row['petAge'].'</p>';
								echo '<p class="card-text">Person: '.$row['userName'].'</p>';
								echo '<p class="card-text">Email: '.$row['userEmail'].'</p>';
								echo '<p class="card-text">Address: '.$row['userAddress'].'</p>';
								echo '<p class="card-text">Phone: '.$row['userPhone'].'</p>';
								// Post pet id with approve or disapprove action
								echo '<form method="Post" action="">';
									echo '<input id="idPet" type="text" name="idPet" value = "'.$row['petId'].'"  hidden><br/>';
									echo '<div class="row">';
										echo '<div class="col">';
											echo '<button type="submit" name = "approve" class="btn btn-success">Approve</button>';
										echo '</div>';
										echo '<div class="col">';
											echo '<button type="submit" name = "disapprove"  class="btn btn-secondary">Disapprove</button>';
										echo '</div>';
								  echo '</div>';
								echo '</form>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				}
				echo '</div>';
			}
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

