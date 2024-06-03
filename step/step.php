<!DOCTYPE html>
<html lang="en">
<?php
/*  session_start();
  include 'core/init.php';*/
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Women Empowerment</title>
  
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/text.css">
            <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  
</head>
<body>
  <header>
     <!--navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top scrolling-navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="images/step logo.png" alt="Logo" width="40" height="26" class="d-inline-block align-text-top">
      STEP
 </a>
 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

 <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
        <a class="nav-link" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="guidelines.php">Guidelines</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Training Sector
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="stitching.php">Stitching</a></li>
            <li><a class="dropdown-item" href="tailoring.php">Tailoring</a></li>
            <li><a class="dropdown-item" href="agriculture.php">Agriculture</a></li>
          </ul>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="ngo.php">NGO(s)</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ngo/index.php">Registration</a>
          </li>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ngo/index.php">Status</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ngo/index.php">FAQ</a>
          </li>
</ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    
  
    <!--  <ul class="navbar-nav ml-auto nav-flex-icons">
      <div class="dropdown-menu dropdown-menu-right dropdown-default"
              aria-labelledby="navbarDropdownMenuLink-333">
              <?php
                if(!isset($_SESSION['email'])){
                  echo "<a href='user/login.php' class='dropdown-item'>Login as User</a>";
                  echo "<a href='ngo/login.php' class='dropdown-item'>Login as NGO</a>";
                }else{
                  $email = $_SESSION['email'];
                  $sqluser = "SELECT * FROM step WHERE email = '$email'";
                  $result = $db->query($sqluser);
                  while ($row_user = mysqli_fetch_array($result)) {
                    $step_email = $row_user['email'];
                  }

                  if($email == $step_email){
                    echo "<a href='user/myaccount.php' class='dropdown-item'>My Account</a>";
                    echo "<a href='user/logout.php' class='dropdown-item'>Logout</a>";
                  }

                  $sqlngo = "SELECT * FROM ngo WHERE email = '$email'";
                  $result = $db->query($sqlngo);
                  while ($row_ngo = mysqli_fetch_array($result)) {
                    $ngo_email = $row_ngo['email'];
                  }

                  if($email == $ngo_email){
                    echo "<a href='ngo/myaccount.php' class='dropdown-item'>My Account</a>";
                    echo "<a href='ngo/logout.php' class='dropdown-item'>Logout</a>";
                  }
                }
              ?>
              </div>-->
    </div>
  </div>
</nav>
</header>
  <!-- Background 
<div  style="
    background-image: url('images/women-empowerment-1.png');
    height: 400px;
  ">
              </div>-->
<!-- text 
        <div class="container-fluid d-flex align-items-center justify-content-center">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="text-dark" style="line-height: 1.5em;">Ministry of Women and Child Development</h1>
            </div>
              </div>-->

          <div class="content-wrapper">
            <img src="images/images.jpeg">
            <div class="text-wrapper">
        <!--    <div class="container-fluid d-flex align-items-center justify-content-center">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-md-10">-->
              <h3>Support to Training and Employment Programme for Women (STEP)</h3>
            </div>
          </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br><br>
        <br>
        <br>
          <h2 class="text-center p-3">Support to Training and Employment Programme for Women (STEP)</h2>
  <p class="px-4 text-justify">
    The Ministry has been administering ‘Support to Training and Employment Programme for Women (STEP) Scheme’ since
    1986-87 as a ‘Central Sector Scheme’. The STEP Scheme aims to provide skills that give employability to women and to
    provide competencies and skill that enable women to become self-employed/entrepreneurs. The Scheme is intended to
    benefit women who are in the age group of 16 years and above across the country. The grant under the Scheme is given
    to an institution/ organisation including NGOs directly and not the States/ UTs. The assistance under STEP Scheme will
    be available in any sector for imparting skills related to employability and entrepreneurship, including but not
    limited to the Agriculture, Horticulture, Food Processing, Handlooms, Tailoring, Stitching, Embroidery, Zari etc,
    Handicrafts, Computer & IT enable services along with soft skills and skills for the work place such as spoken
    English, Gems & Jewellery, Travel & Tourism, Hospitality.
  </p>
               
     
<?php include 'includes/footer.php';?>  