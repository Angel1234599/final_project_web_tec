<?php
session_start();
//to check if user is loggedd in if not redirect them
//include('isLogin.php');



include('dbconnection.php');

error_reporting(0);

$msg = "";


// Get all the type from types table 
$sql_getType = "SELECT * FROM `pettype`";
$all_type = mysqli_query($db, $sql_getType);


// Get all the status from status table 
$sql_getStatus = "SELECT * FROM `statuspet`";
$all_status = mysqli_query($db, $sql_getStatus);

// If submit button is clicked ...
if (isset($_POST['submit'])) {
	

	//error counter
	$errorcount = '';


	// Store the  name in a "name" variable
	$name = mysqli_real_escape_string($db, $_POST['name']);

	// Store the age in a "age" variable
	$age = mysqli_real_escape_string($db, $_POST['age']);


	//Store the type in type variable
	$sType =  mysqli_real_escape_string($db, $_POST['type']);

	//Store the status in status variable
	$sStatus = mysqli_real_escape_string($db, $_POST['status']);

	//Store userId from session user id

	if (isset($_SESSION['user'])) {
            
		$id = $_SESSION['user']['id'];
	  }
	  else{
		$id = 3;
	  }
	


	//store the filename in filename variable
	$filename = $_FILES["uploadfile"]["name"];

	//testing 
	$tempname = $_FILES["uploadfile"]["tmp_name"];

	//getting the image to display
	$folder = "./uploadedimages/" . $filename;



	// Get all the submitted data from the form
	//$sql = "INSERT INTO pet (image) VALUES ('$filename')";

	$insert_query = "INSERT INTO `pet` (`idPet`, `idTypePet`, `name`, `age`, `image`, `idStatus`, `iduser`) VALUES (NULL, '$sType', '$name', '$age', '$filename', '$sStatus', '$id')";

	// Execute query
	$insert = $db->query($insert_query);

	if ($insert) {


		echo "<p>inserted successfully</p>";
	} else echo "not able to insert";

	if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
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
		<div class="container">
				<?php
			//Containt main PHP Form

			?>








			<div>
				<form method="POST" action="" enctype="multipart/form-data">

					<div class="rendered-form">
						<div class="formbuilder-text form-group field-name">
							<label for="name" class="formbuilder-text-label" style="color: white">Name</label>
							<input type="text" class="form-control" name="name" access="false" id="name" required placeholder="Enter Name" oninvalid="this.setCustomValidity('Enter Pet Name Here')" oninput="this.setCustomValidity('')">
						</div>
						<div class="formbuilder-text form-group field-text-1671151273647">
							<label for="text-1671151273647" class="formbuilder-text-label" style="color: white">Age</label>
							<input type="text" class="form-control" name="age" access="false" id="age" required placeholder="Enter Age" oninvalid="this.setCustomValidity('Enter Age Here')" oninput="this.setCustomValidity('')">
						</div>
						<div class="formbuilder-select form-group field-type">
							<label for="type" class="formbuilder-select-label" style="color: white">Type</label>
							<select class="form-control" name="type" id="type">
								<?php
								// use a while loop to fetch data
								// from the $all_type variable
								// and individually display as an option
								
								while ($type = mysqli_fetch_array(
									$all_type,
									MYSQLI_ASSOC
								)) :;
								?>
									<option value="<?php echo $type["idTypePet"];
													// The value we usually set is the primary key
													?>"><?php echo $type["nametype"]; ?>
									</option>
								<?php
								endwhile;
								// While loop must be terminated
								?>

							</select>
						</div>
						<div class="formbuilder-select form-group field-status">
							<label for="status" class="formbuilder-select-label" style="color: white">Status</label>
							<select class="form-control" name="status" id="status">

								<?php
								// use a while loop to fetch data
								// from the $all_status variable
								// and individually display as an option
								while ($status = mysqli_fetch_array(
									$all_status,
									MYSQLI_ASSOC
								)) :;
								?>
									<option value="<?php echo $status["idStatus"];

													?>"><?php echo $status["namestatus"]; ?>
									</option>
								<?php
								endwhile;
								// While loop must be terminated
								?>
							</select>
						</div>
						<!--Image file -->
						<div class="formbuilder-file form-group field-uploadfile">
							<label for="uploadfile" class="formbuilder-file-label" style="color: white">Choose an image to upload</label>
							<input type="file" class="form-control" name="uploadfile" access="false" multiple="false" id="uploadfile" required oninvalid="this.setCustomValidity('Please Upload an image')" oninput="this.setCustomValidity('')">
						</div>
						<div class="formbuilder-button form-group field-upload">
							<button type="submit" class="btnsbt" name="submit" access="false" id="submit">Submit</button>
						</div>
					</div>
				</form>
			</div>







		</div>
	</main>

	<footer>

	</footer>
</body>

</html>