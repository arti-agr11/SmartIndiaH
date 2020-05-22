<?php
include 'functions.php';


if (isset($_POST['page'])) {
  $page = $_POST['page'];
  //if requested page is signup
  if ($page == "login") {
    if (isset($_POST['email']) && isset($_POST['password'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      echo userLogin($email, $password);
    } else {
      echo error("No email and password defined");
    }
  }

  //if requested page is signup
  elseif ($page == "signup") {
    if (isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['gender'])&& isset($_POST['age'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $gender = $_POST['gender'];
      $age = $_POST['age'];
      echo userSignup($name, $gender, $age, $email, $password);
    }
    //Missing Fields
    else {
      echo error("Missing Fields in signup");
    }
    //If there is no any page
  }

  //sell function 
  elseif ($page == "sell") {
    if (isset($_POST['email']) && isset($_POST['type']) && isset($_POST['medicine_name']) && isset($_POST['expiry']) && isset($_POST['quantity']) && isset($_POST['price']) && isset($_POST['image'])) {
      $medicine_name = $_POST['medicine_name'];
      $email = $_POST['email'];
      $type = $_POST['type'];
      $expiry = $_POST['expiry'];
      $price = $_POST['price'];
      $quantity = $_POST['quantity'];
      $image = $_POST['image'];
      echo sell($type, $medicine_name, $email, $price, $expiry, $quantity, $image);
    }
    //Missing Fields
    else {
      echo error("Missing Fields While Selling");
    }
    //If there is no any page
  }
  //Fetch Medicine 
  elseif ($page == "fetchMedicine") {
    if (isset($_POST['type'])) {
      $type = $_POST['type'];
      
      if(isset($_POST['sortBy']))
          $sortBy=$_POST['sortBy'];
      else
        $sortBy="";

      echo fetchMedicine($type,$sortBy);
    }
    //Missing Fields
    else {
      echo error("Missing Fields While Buying");
    }
  }


  //Send Message
  elseif ($page == "sendMessage") {
    if (isset($_POST['from']) && isset($_POST['to']) && isset($_POST['message'])) {
      $from = $_POST['from'];
      $to = $_POST['to'];
      $message = $_POST['message'];
      echo sendMessage($from, $to, $message);
    }
    //Missing Fields
    else {
      echo error("Missing Fields While Selling");
    }
  } elseif ($page == "fetchChat") {
    if (isset($_POST['from']) && isset($_POST['to'])) {
      $from = $_POST['from'];
      $to = $_POST['to'];
      echo fetchChat($from, $to);
    }
    //Missing Fields
    else {
      echo error("Missing Fields While Selling");
    }
  }








  //If there is no any page
  else {
    echo error("No Page found");
  }
}



//if requested page is not sent
else {
  echo error("No Page Name Defined");
}
