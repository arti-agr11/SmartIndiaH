<!DOCTYPE html>
<html lang="en">
<head>
	<title>about</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="include/stylesheets/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
<?php  include 'include/navbar.php' ?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100 text-center">
			<div class="wrap-login100 p-t-190 p-b-30">

				<form class="login100-form validate-form" id="login_form">
					<div class="login100-form-avatar">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSBXnfQZMKsMJpamstcdTnTe198LB6eYpp520j7xYSAjU_sMFfk" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						User
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required" style="padding-top:10px; padding-bottom:7px;">
						<input class="input100" type="email" name="username" id="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
                    </div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required" style="padding-bottom:7px;">
						<input class="input100" type="password" id="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10" style="padding-bottom:5px;">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<!-- <div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1" style="color:#2A293E">
							Forgot Username / Password?
						</a>
					</div> -->

					<div class="text-center w-full">
						<a class="txt1" href="/" style="color: #2A293E;">
							Create new account
							<i class="fa fa-long-arrow-right"></i>						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>



</body>
</html>



<script>
  $(document).ready(function() {
    $('#login_form').on('submit', function(event) {
      email = $("#username").val();;
      password = $("#password").val();
      data =
        `page=login&email=${email}&password=${password}`
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