<?php
session_start();
?>
<!doctype html>
<html lang="en">
<?php
if (isset($_SESSION['user']))
  echo "<script>window.open('about.php','_self')</script>";
?>

<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <?php include 'include/navbar.php' ?>
</head>

<body>
  <div>
    <div class="nav-menu fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-dark navbar-expand-lg">
              <a class="navbar-brand" href="#"><img src="include/images/LOGO.jpg" class="img-fluid" alt="WELL-O-CITY"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item"> <a class="nav-link active" style="color:black;" href=""><strong>HOME</strong><span class="sr-only">(current)</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" style="color:black;" href="about"><strong>ABOUT</strong></a> </li>
                  <li class="nav-item"> <a class="nav-link" style="color:black;" href="contact"><strong>CONTACT</strong></a> </li>

                  <li class="nav-item"><a href="#" style="color:black;" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Download</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="bg-overlay">
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6" id="mid1">
              <h1 class="text-center">Well-O-City</h1>
              <h3 class="text-center">The Environment Friendly Medicello App</h3>
              <hr>
              <div class="text-center"><a href="login" class="btn btn-outline-info wow fadeInLeft text-center" data-wow-delay="0.3s">Getting Started</a></div>
              <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
              <h6 class="mb-3 wow fadeInLeft  text-justify" data-wow-delay="0.3s">
                Everyone deserves healthcare!
                100% of your donation funds life-changing healthcare — we prove it by being radically transparent.
                Our vision is to bring more transparency to online donations, so that we provide an opportunity for every Indian & NRI to give back to the society confidently.</h6>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6" id="mid2">

              <div class="card wow fadeInRight" data-wow-delay="0.3s">
                <div class="card-body">

                  <div class="text-center">
                    <h3 class="white-text">
                      Register:</h3>
                    <hr class="hr-light">
                  </div>
                  <form class="form" action="#" id="submit_form">
                    <div class="md-form">
                      <label for="form1" class="active">Your name</label>
                      <input type="text" id="form1" class="white-text form-control">
                    </div>
                    <div class="md-form">
                      <label for="form2" class="active">Your email</label>
                      <input type="email" id="form2" class="white-text form-control" required="required">
                    </div>
                    <div class="md-form">
                      <label for="form3" class="active">Gender</label>
                      <select id="form3" class="white-text form-control" required="required">
                        <option selected disabled value=""></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="md-form">
                      <label for="form4" class="active">Age</label>
                      <input type="number" id="form4" class="white-text form-control" required="required">
                    </div>
                    <div class="md-form">
                      <label for="form5">Your password</label>
                      <input type="password" id="form5" class="white-text form-control" minlength="6" maxlength="14" required="required">
                    </div>
                    <div class="text-center mt-4">
                      <button class="btn btn-success">Sign up</button>
                      <h4 class="white-text" style="padding-top:5px;">Already a registered user?<a href="login.php"><strong> Log-in</strong></a></h4>
                      <hr class="hr-light mb-3 mt-4">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <footer class="my-5 text-center" class="heyyy">
        <p class="mb-2"><small>WELL-O-CITY. <br>COPYRIGHT © 2020.</small></p>
        <small>
          <a href="#" class="m-2">PRESS</a>
          <a href="#" class="m-2">TERMS</a>
          <a href="#" class="m-2">PRIVACY</a>
        </small>
      </footer>



</body>

</html>


<script>
  $(document).ready(function() {
    $('#submit_form').on('submit', function(event) {
      name = $("#form1").val();
      email = $("#form2").val();;
      gender = $("#form3").val();
      age = $("#form4").val();
      password = $("#form5").val();
      data =
        `page=signup&name=${name}&email=${email}&password=${password}&age=${age}&gender=${gender}`
      // console.log(symptoms_array);
      $.ajax({
        type: "POST",
        cache: false,
        url: "API/api.php",
        data: data, // multiple data sent using ajax
        success: function(html) {
          console.log(html.status)
          if (html.status = "success") {
            // window.location="dashboard.php"
            // alert("Abhishek");
            var username = $("#name_signup").val();
            var url = "include/login_success.php";
            var form = $(
              '<form action="' +
              url +
              '" method="post">' +
              '<input type="hidden" name="email" value="' +
              username +
              '" />' +
              "</form>"
            );
            $("body").append(form);
            form.submit();
          }
          // show_report(html)
        }
      });
      return false;

    });
  });
</script>