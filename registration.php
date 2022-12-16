<?php
    session_start();    
    $errorM = "";
    
    include('dbconnection.php');

    if(isset($_POST['btnRegister'])){
     
        $name = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPassword'];
        $address = $_POST['txtAddress'];
        $phone_number = $_POST['txtPhoneNumber'];

        
        $query = "INSERT INTO 
          user  
          VALUES ('', '$email', '$password', '$name', '$phone_number', '$address')";

        // echo $query;
        $insert = mysqli_query($db,$query);
       // $result = $db->query($query);
        header("Location: login.php");
        //print_r($result);
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
    <link rel="stylesheet" href="Styles/logincss.css">


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
    <br>
        <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5"><strong>Create an account</strong></h2>

              <form method="post">

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="txtName" />
                  <label class="form-label" for="form3Example1cg"><Strong>Your Name</strong></label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="txtEmail" />
                  <label class="form-label" for="form3Example3cg"><strong>Your Email</strong></label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="txtPassword"/>
                  <label class="form-label" for="form3Example4cg"><strong>Password</strong></label>
                </div>





                <div class="form-outline mb-4">
                
                <textarea id="w3review" name="txtAddress" rows="4" cols="50" class="form-control form-control-lg">
      
      </textarea>
                
                  <label class="form-label" for="form3Example4cdg"><strong>Enter Address</strong></label>
                </div>

                <div class="form-outline mb-4">
                  <input type="number" id="form3Example4cdg" class="form-control form-control-lg"  name="txtPhoneNumber"/>
                  <label class="form-label" for="form3Example4cdg"><strong>Enter Phone Number</strong></label>
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                   <strong> I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a></strong>
                  </label>
                </div>

                <div class="d-flex justify-content-center">

                <input type="submit" name="btnRegister" value="Register" class="btn btn-dark">
                  <!-- <button type="button" name="btnRegister"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button> -->
                </div>

                <p class="text-center text-muted mt-5 mb-0"><strong>Already have an account?</strong> <a href="login.php"
                    class="fw-bold text-body"><u><strong>Login here</strong></u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</main>
</body>

	<!-- <footer>
		<?php 
			include_once('Layouts/footer.php');
		?>
	</footer> -->
</html>
