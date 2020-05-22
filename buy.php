<?php 
session_start()
?>
<!doctype html>
<html lang="en">
<?php
if (!isset($_SESSION['user']))
  echo "<script>window.open('home.php','_self')</script>";
?>
<head>
    <title>work in progress</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">
    <!-- Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="include/stylesheets/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="include/stylesheets/themify-icons.css">
    <!-- Main css -->
    <link href="include/stylesheets/buy.css" rel="stylesheet">
    <!-- <link href="/stylesheets/about.css" rel="stylesheet"> -->

</head>
<body>
    <header>
    <?php include './nav.php'; ?>

    <div class="bg-overlay">
        <div class="text-center">
            <h3>The care you need. The compassion you deserve</h3>
            <p>Exceptional Care Close to You</p>
            <br>
            <a href="dia.php"><button type="button" class="btn btn-primary btn-lg">Diagnose</button></a>
        </div>
    </div>
    
    <br><br>
    <div class="container">
        <!--Grid row-->
<div class="row">

    <!--Grid column-->
    <div class="col-md-4 mb-4">
  
      <!-- Card -->
      <div class="card gradient-card">
  
          <div class="card-image" style="background-image:url('include/images/antipyretics.PNG');background-position: center;background-size: cover;background-repeat: no-repeat;">
  
            <!-- Content -->
            <a href="medi.php?id=Antipyretics">
              <div class="text-white d-flex h-100 mask blue-gradient-rgba">
                <div class="first-content align-self-center p-5">
                  <h3 class="card-title"><br> <br></h3>
                </div>
                <div class="second-content align-self-center mx-auto text-center">
                  <i class="far fa-money-bill-alt fa-3x"></i>
                </div>
              </div>
            </a>
  
          </div>
      </div>
      <!-- Card -->
  
    </div>
    <div class="col-md-4 mb-4">
      <div class="card gradient-card">
  
          <div class="card-image animated bounce infinite" alt="Transparent MDB Logo" style="background-image: url('include/images/analgesics.PNG');background-position: center;background-size: cover;background-repeat: no-repeat; ">
  
            <!-- Content -->
            <a href="medi.php?id=Analgesics">
              <div class="text-white d-flex h-100 mask purple-gradient-rgba">
                <div class="first-content align-self-center p-5">
                    <h3 class="card-title"><br> <br></h3>
                </div>
                <div class="second-content  align-self-center mx-auto text-center">
                  <i class="fas fa-chart-line fa-3x"></i>
                </div>
              </div>
            </a>
  
          </div>
  
      </div>
      <!-- Card -->
  
    </div>
    <div class="col-md-4 mb-4">
  
      <!-- Card -->
      <div class="card gradient-card">
  
          <div class="card-image" style="background-image: url('include/images/antibiotics.PNG'); background-position: center;background-size: cover;background-repeat: no-repeat;">
  
            <!-- Content -->
            <a href="medi.php?id=Antibiotics">
              <div class="text-white d-flex h-100 mask peach-gradient-rgba">
                <div class="first-content align-self-center p-5">
                    <h3 class="card-title"><br> <br></h3>
                </div>
                <div class="second-content  align-self-center mx-auto text-center">
                  <i class="fas fa-chart-pie fa-3x"></i>
                </div>
              </div>
            </a>
          </div>
      </div>
  
    </div>
    <div class="col-md-4 mb-4">
  
        <!-- Card -->
        <div class="card gradient-card">
    
            <div class="card-image" style="background-image: url('include/images/antiseptics.PNG');background-position: center;background-size: cover;background-repeat: no-repeat;">
    
              <!-- Content -->
              <a href="medi.php?id=Antibiotics">
                <div class="text-white d-flex h-100 mask peach-gradient-rgba">
                  <div class="first-content align-self-center p-5">
                    <h3 class="card-title"><br> <br></h3>
                  </div>
                  <div class="second-content  align-self-center mx-auto text-center">
                    <i class="fas fa-chart-pie fa-3x"></i>
                  </div>
                </div>
              </a>
            </div>
        </div>
    
      </div>
      <div class="col-md-4 mb-4">
  
        <!-- Card -->
        <div class="card gradient-card">
    
            <div class="card-image" style="background-image: url('include/images/stimulants.PNG'); background-position: center;background-size: cover;background-repeat: no-repeat;">
    
              <!-- Content -->
              <a href="medi.php?id=Stimulizers">
                <div class="text-white d-flex h-100 mask peach-gradient-rgba">
                  <div class="first-content align-self-center p-5">
                    <h3 class="card-title"><br> <br></h3>
                  </div>
                  <div class="second-content  align-self-center mx-auto text-center">
                    <i class="fas fa-chart-pie fa-3x"></i>
                  </div>
                </div>
              </a>
            </div>
        </div>
    
      </div>
      <div class="col-md-4 mb-4">
  
        <!-- Card -->
        <div class="card gradient-card">
    
            <div class="card-image" style="background-image: url('include/images/oralc.PNG'); background-position: center;background-size: cover;background-repeat: no-repeat;">
    
              <!-- Content -->
              <a href="medi.php?id=Oral%20Contraceptives">
                <div class="text-white d-flex h-100 mask peach-gradient-rgba">
                  <div class="first-content align-self-center p-5">
                    <h3 class="card-title"><br> <br></h3>
                  </div>
                  <div class="second-content  align-self-center mx-auto text-center">
                    <i class="fas fa-chart-pie fa-3x"></i>
                  </div>
                </div>
              </a>
            </div>
        </div>
    
      </div>
      <div class="col-md-4 mb-4">
  
        <!-- Card -->
      <div class="card gradient-card">
    
        <div class="card-image" style="background-image: url('include/images/statins.PNG'); background-position: center;background-size: cover;background-repeat: no-repeat;">

          <!-- Content -->
          <a href="medi.php?id=Statins">
            <div class="text-white d-flex h-100 mask peach-gradient-rgba">
              <div class="first-content align-self-center p-5">
                <h3 class="card-title"><br> <br></h3>
              </div>
              <div class="second-content  align-self-center mx-auto text-center">
                <i class="fas fa-chart-pie fa-3x"></i>
              </div>
            </div>
          </a>
        </div>
    </div>

  </div>
      <div class="col-md-4 mb-4">
  
        <!-- Card -->
        <div class="card gradient-card">
    
            <div class="card-image" style="background-image: url('include/images/antimalaria.PNG'); background-position: center;background-size: cover;background-repeat: no-repeat;">
    
              <!-- Content -->
              <a href="medi.php?id=Anti-malarial%20drugs">
                <div class="text-white d-flex h-100 mask peach-gradient-rgba">
                  <div class="first-content align-self-center p-5">
                    <h3 class="card-title"><br> <br></h3>
                  </div>
                  <div class="second-content  align-self-center mx-auto text-center">
                    <i class="fas fa-chart-pie fa-3x"></i>
                  </div>
                </div>
              </a>
            </div>
        </div>
    
      </div>
    <div class="col-md-4 mb-4">

      <!-- Card -->
      <div class="card gradient-card">
  
          <div class="card-image" style="background-image: url('include/images/tranquilizers.PNG'); background-position: center;background-size: cover;background-repeat: no-repeat;">
  
            <!-- Content -->
            <a href="medi.php?id=Tranquilizers">
              <div class="text-white d-flex h-100 mask aqua-gradient-rgba">
                <div class="first-content align-self-center p-5">
                    <h3 class="card-title"><br> <br></h3>
                </div>
                <div class="second-content  align-self-center mx-auto text-center">
                  <i class="fas fa-chart-line fa-3x"></i>
                </div>
              </div>
            </a>
          </div>

      </div>
    </div>
  </div>
    </div>

    <footer class="my-5 text-center light-bg" class="heyyy">
        <p class="mb-2"><small>WELL-O-CITY. <br>COPYRIGHT © 2020.</small></p>
        <small>
            <a href="#" class="m-2">PRESS</a>
            <a href="#" class="m-2">TERMS</a>
            <a href="#" class="m-2">PRIVACY</a>
        </small>
    </footer>

    <!-- jQuery and Bootstrap
    <script src="jquery-3.2.1.min.js"></script>
    <script src="bootstrap.bundle.min.js"></script> -->
    <!-- <script src="app.js"></script> -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Custom JS -->
     <script src="include/js/script.js"></script>

</body>
</html>



