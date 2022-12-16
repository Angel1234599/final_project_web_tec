<?php

if(!empty($_GET['file'])){
    $filename = basename($_GET['file']);
    $filepath = 'img/' . $filename;
    if(!empty($filename) && file_exists($filepath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Emcoding: binary");

        readfile($filepath);
        exit;
    }else{
        echo "This file does not exists";
    }
}

if(!empty($_GET['file1'])){
    $filename = basename($_GET['file1']);
    $filepath = 'img/' . $filename;
    if(!empty($filename) && file_exists($filepath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Emcoding: binary");

        readfile($filepath);
        exit;
    }else{
        echo "This file does not exists";
    }
}

if(!empty($_GET['file2'])){
    $filename = basename($_GET['file2']);
    $filepath = 'img/' . $filename;
    if(!empty($filename) && file_exists($filepath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/zip");
        header("Content-Transfer-Emcoding: binary");

        readfile($filepath);
        exit;
    }else{
        echo "This file does not exists";
    }
}

?>

<html>
    <header>
        <title></title>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- BOOTSTRAP-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    
    </header>
    <body style="background-color: #051f44">
    <header>
		<?php 
			require_once('Layouts/header.php');
		?>	
	</header>

        <main style="overflow:hidden">
        <br>    
        <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="img/dog1.jpg"
                class="card-img-top"
                alt="Waterfall"
                width="100"
                height="300"
              />
              <div class="card-body">
                
                <a href="downloads.php?file=dog1.jpg" class="btn btn-primary">Download Image</a>
              </div>
            </div>
          </div>

          <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="img/dog2.jpg"
                class="card-img-top"
                alt="Waterfall"
                width"100"
                height="300"
              />
              <div class="card-body">
                
                <a href="downloads.php?file=dog2.jpg" class="btn btn-primary">Download Image</a>
              </div>
            </div>
          </div>

          <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="img/cat1.jpg"
                class="card-img-top"
                alt="Waterfall"
                width="100"
                height="300"
              />
              <div class="card-body">
                        <a href="downloads.php?file=cat1.jpg" class="btn btn-primary" >Download Image</a>
              </div>
            </div>
          </div>

          <!-- <div class="carousel-item active">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <img
                src="img/cat2.jpg"
                class="card-img-top"
                alt="Waterfall"
                width-"100"
                height="300"         
              />
              <div class="card-body">
                <h5 class="card-title">Download Image</h5>
                
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div> -->
        </main>
    </body>

</html>