<?php
session_start();

if (!isset($_SESSION['user']))
  echo "<script>window.open('home.php','_self')</script>";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Sell</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Mobland - Mobile App Landing Page Template">
    <meta name="keywords" content="HTML5, bootstrap, mobile, app, landing, ios, android, responsive">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="include/stylesheets/bootstrap.min.css">
    <link rel="stylesheet" href="include/stylesheets/themify-icons.css">
    <link href="include/stylesheets/buy.css" rel="stylesheet">
</head>

<?php
include './API/connection.php';
include './API/functions.php';
$email = $_SESSION['user'];
$query = "SELECT * FROM `sih_user`  WHERE `email` = '$email'";
$run_query = mysqli_query($conn, $query);
$fetched_details = mysqli_fetch_array($run_query);
if (isset($_POST['submit_sell'])) {
    $type = $_POST['type'];
    $medicine_name = $_POST['medicine_name'];
    $price = $_POST['price'];
    $expiry = $_POST['expiry'];
    $quantity = $_POST['quantity'];
    $target_dir = "images/medicine/";
    $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
    $target_file = $target_dir . "$email" . rand(1, 100) . "." . strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
    } else {
        $target_file = "";
    }
    if (sell($type, $medicine_name, $email,$price, $expiry, $quantity,$target_file)) {
        echo "<script>alert('Uploaded')</script>";
        echo "<script>window.open('buy.php','_self')</script>";
    }
}
?>

<body>
    <?php include './nav.php'; ?>
    <div class="container" style="padding-top:3%;">
        <div class="container register" id="form-fill">
            <div class="row">
                <div class="col-md-3 register-left">
                    <img src="LOGO.PNG" alt="" />
                    <h3>Thank you</h3>
                    <p>You are just 30 seconds away. !</p>
                    <a href="buy.php"><input type="button"  value="Buy" /></a><br />
                    <?php if(isset($_GET['price'])){  ?> 
                    <a href="sell.php"><input type="button" value="Sell" /></a><br />
                    <?php } else{?>
                    <a href="sell.php?price=0"><input type="button" value="Donate" /></a><br />
                    <?php } ?>

                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form method="post" enctype="multipart/form-data">
                                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <h3 class="register-heading">Fill The Form to Sell</h3>
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div id="oneSell">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="<?php echo $fetched_details['name'] ?>" disabled />
                                                </div>
                                                <div class="form-group">
                                                    <!--check this part afterwards-->
                                                    <lablel>Type of Medicine</label>
                                                    <select class="form-control" name="type" required>
                                                        <option value="" selected disabled>Please select the kind of medicine</option>
                                                        <option>Antipyretics</option>
                                                        <option>Analgesics</option>
                                                        <option>Antibiotics</option>
                                                        <option>Antiseptics</option>
                                                        <option>Stimulizers</option>
                                                        <option>Oral Contraceptives</option>
                                                        <option>Statins</option>
                                                        <option>Anti-malarial drugs</option>
                                                        <option>Tranquilizers</option>
                                                      
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                    <lablel>Name of Medicine</label>
                                                        <input type="text" class="form-control" placeholder="Name of medicine *" name="medicine_name" required/>
                                                    </div>
                                                    <div class="form-group">
                                                    <lablel>Expiry Date</label>
                                                        <input type="text" class="form-control" placeholder="Expiry date of medicine *" name="expiry" required/>
                                                    </div>
                                                    <div class="form-group">
                                                    <lablel>Quantity</label>
                                                        <input type="text" class="form-control" placeholder="Quantity" name="quantity" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <lablel>Price</label>
                                                    <input type="text" class="form-control" placeholder="Price *" name="price" <?php if(isset($_GET['price'])){ echo "value='0' readonly";} ?> required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your Email *" value="<?php echo $fetched_details['email'] ?>" disabled />
                                            </div>
                                            <div class="form-group">
                                                <input type="file" class="form-control" name="profile_pic"  accept="image/*" required/>
                                            </div>
                                            <input type="submit" class="btnRegister" value="Sell" name="submit_sell" />
                                        </div>
                                    </div>
                                </div>
                            </form>
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
        <!-- <script src="include/js/script.js"></script> -->

</body>

</html>