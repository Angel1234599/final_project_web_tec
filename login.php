<?php
    session_start();    
    $errorM = "";
    
    include('dbconnection.php');

    if(isset($_POST['submit'])){

        $email = $_POST['idemail'];
        $password = $_POST['idpass'];

        $query = "select * from user where email = '$email' and password = '$password'";

        echo $query;


        

        $result = $db->query($query);

        $row = $result->fetch_assoc();

        if($row){
            echo "welcome " . $row['idemail'];
            $_SESSION['isLoggedIn'] = true;
            $_SESSION['user'] = $row;
                    //to get user id to pass the value to pet form

            $_SESSION['userid'] = ['user']["id"];
            $_SESSION['username'] = ['user']["name"];

            header("Location:  home.php");

        }else{
            $errorM = "The username/password is incorrect";
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

    <?php 
    if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == false){
      ?>
  <div class = "error" style="color: white;"><?php echo $errorM; ?></div>

  <br>
<section class="h-100 gradient-form" style="background-color: #051f44;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                
                  <h4 class="mt-1 mb-5 pb-1"><strong>Save A Life. Adopt A Pet</strong></h4>
                </div>

                <form method="post" action="">
                  <p><strong>Please login to your account</strong></p>

                  <div class="form-outline mb-4">
                    <input type="email" id="idemail" class="form-control"   
                      placeholder="Enter email address"  name="idemail"  
                      required  oninvalid="this.setCustomValidity('Enter Email Here')" oninput="this.setCustomValidity('')"/>
                    <label class="form-label" for="idemail"><strong>Email</strong></label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="idpass" class="form-control"
                    placeholder="Enter Password" name="idpass"
                    required  oninvalid="this.setCustomValidity('Enter Password Here')" oninput="this.setCustomValidity('')"/>
                    <label class="form-label" for="idpass"><strong>Password</strong></label>
             </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type = "submit" class="btn btn-dark" name="submit" value="Log In">
                    <!-- <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                      in</button> -->
                    
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-dark"><a href="registration.php">Create new</a></button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center" style="background-color: green">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4 align-items-center">
                <h4 class="mb-4 ">We are more than just a NGO</h4>
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

<?php 
    }else{
      ?>
      <div class="text-white px-3 py-4 p-md-5 mx-md-4 align-items-center"><?php echo "<h1>Hello, " . $_SESSION['user']['email'] . "</h2>";?> </div>
      <?php  
  }
    ?>
		</div>
	</main>

	
</body>
<!-- <footer>
		<?php 
			include_once('Layouts/footer.php');
		?>
	</footer>
</html> -->