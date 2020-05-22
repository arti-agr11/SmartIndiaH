<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sample website using Bootstrap and ExpressJS</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="include/stylesheets/contact.css">
</head>
<body>
  <div class="bg-img">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar">
          <div class="container">
              <a class="navbar-brand" href="/" style="color:#2A293E;">Home</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                  <li class="nav-item active" >
                     <a class="nav-link" href="/about" style="color:#2A293E;">About <span class="sr-only">(current)</span></a>
                   </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact" style="color:#2A293E;">Contact</a>
                  </li>
                  </ul>
                      <form class="form-inline">
                          <div class="md-form my-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                          </div>
                        </form>
  
                </div>
          </div>
      </nav>

      <section id="team" class="pb-5">
        <div class="container">
            <h5 class="section-title h1">OUR TEAM <br></h5>
            <div class="row">
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                        <h4 class="card-title">Abhishek Kumar</h4>
                                        <p class="card-text">Production & Industrial Engineering <br><strong>Sophomore</strong></p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Abhishek Kumar</h4>
                                        <p class="card-text">Second year B.Tech student at NIT JAMSHEDPUR <br><br><strong>Contact : </strong>952140XXXX<br></p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="arti.png" alt="card image"></p>
                                        <h4 class="card-title">Arti Agarwal</h4>
                                        <p class="card-text">Electronics & Communication Engineering<br><strong>Sophomore</strong></p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Arti Agarwal</h4>
                                        <p class="card-text">Second year B.Tech student at NIT JAMSHEDPUR <br><br><strong>Contact : </strong>760202XXXX<br></p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                         
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="https://accounts.google.com/SignOutOptions?hl=en&continue=https://www.google.com%3Fhl%3Den-US">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="harshleen.png" alt="card image"></p>
                                        <h4 class="card-title">Harshleen Sando</h4>
                                        <p class="card-text">Computer Science & Engineering<br><strong>Sophomore</strong></p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Harshleen Sando</h4>
                                        <p class="card-text">Second year B.Tech student at NIT JAMSHEDPUR <br><br><strong>Contact : </strong>966955XXXX<br></p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                        
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="satyam.png" alt="card image"></p>
                                        <h4 class="card-title">Satyam Kumar</h4>
                                        <p class="card-text">Computer Science & Engineering<br><strong>Sophomore</strong></p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Satyam Kumar</h4>
                                        <p class="card-text">Second year B.Tech student at NIT JAMSHEDPUR <br><br><strong>Contact : </strong>620011XXXX<br></p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                       
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="aman.jpg" alt="card image"></p>
                                        <h4 class="card-title">Aman Jaiswal</h4>
                                        <p class="card-text">Electronics & Communication Engineering<br><strong>Sophomore</strong></p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Aman Jaiswal</h4>
                                        <p class="card-text">Second year B.Tech student at NIT JAMSHEDPUR <br><br><strong>Contact : </strong>916260XXXX<br></p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                      
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
                <!-- Team member -->
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                        <div class="mainflip">
                            <div class="frontside">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_06.jpg" alt="card image"></p>
                                        <h4 class="card-title">Ayush Ratna</h4>
                                        <p class="card-text">Production & Industrial Engineering<br><strong>Sophomore</strong></p>
                                        <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="backside">
                                <div class="card">
                                    <div class="card-body text-center mt-4">
                                        <h4 class="card-title">Ayush Ratna</h4>
                                        <p class="card-text">Second year B.Tech student at NIT JAMSHEDPUR <br><br><strong>Contact : </strong>898661XXXX<br></p>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                      
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-skype"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a class="social-icon text-xs-center" target="_blank" href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Team member -->
    
            </div>
        </div>
    </section>

    <footer class="my-5 text-center" class="heyyy">
        <p class="mb-2"><small>WELL-O-CITY. <br>COPYRIGHT © 2020.</small></p>
        <small>
            <a href="#" class="m-2">PRESS</a>
            <a href="#" class="m-2">TERMS</a>
            <a href="#" class="m-2">PRIVACY</a>
        </small>
    </footer>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>