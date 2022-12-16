

<!-- As a heading -->
<nav class="nav navbar navbar-nav navbar-light bg-light mx-auto">
  <div  style="text-align: center;">
    <span style=" font-size: 1.875em;"><strong>Adopt Me</strong></span>
  </div>
</nav>


<nav class="navbar navbar-expand-lg " style="background-color: #0181b0; ">
  <div class="container-fluid">        
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php" style="color: white">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="pets.php" style="color: white">Pets</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="searchPet.php" style="color: white">Search Pet</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="history.php" style="color: white">History</a>
        </li>
        <?php
          // session_start();
          if (isset($_SESSION['user'])) {
            $email = $_SESSION['user']['email'];
            $name = $_SESSION['user']['name'];
            if ($email == 'admin@admin.com') {
          
        ?>
        
          <li class="nav-item active">
          <a class="nav-link" href="pending.php" style="color: white">Pending</a>
        </li>
          <?php      
      }
    }
        ?>
    <li class="nav-item active">
          <a class="nav-link" href="downloads.php" style="color: white">Download</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="login.php" style="color: white">Login</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="logout.php" style="color: white">Logout</a>
        </li>
      </ul>    
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown ml-auto">
            <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white">
                <!-- Welcome User 1 -->

                <!-- to set username to heading -->
                <?php
         
          if (isset($_SESSION['user'])) {
            
            echo $_SESSION['user']['name'];
          }
          else{
            echo "Please Login";
          }?>
            </a>
            
            </li>
        </ul>  
    </div>
  </div>
</nav>

