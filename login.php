    <?php


if(isset($_POST['submit'])){
        echo "hello";

        

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

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                
                  <h4 class="mt-1 mb-5 pb-1">Save A Life. Adopt A Pet</h4>
                </div>

                <form method="post" action="">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="idemail" class="form-control"   
                      placeholder="Enter email address"  />
                    <label class="form-label" for="idemail">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="idpass" class="form-control"
                    placeholder="Enter Password"  />
                    <label class="form-label" for="idpass">Password</label>
                </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type = "submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="submit" value="Log In">
                    <!-- <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                      in</button> -->
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger">Create new</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a NGO</h4>
                <img src="Img/iconpet.png"
                    style="width: 200px;" 
                     alt="logo" >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

		</div>
	</main>

	<footer>
		<?php 
			include_once('Layouts/footer.php');
		?>
	</footer>
</body>
</html>