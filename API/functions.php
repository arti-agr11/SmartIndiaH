<?php
include 'connection.php';
function userLogin($email, $password)
{
    global $conn;
    $query = "SELECT * FROM `sih_user` WHERE email='$email' AND password='$password' AND verification=1";
    $result = mysqli_query($conn, $query);
    $num_row = mysqli_num_rows($result);
    if ($num_row > 0) {
        $status = 'Success';
    } else {
        $status = 'Failed';
    }
    $jsonData = array(
        'username' => $email,
        'status' => $status
    );
    $jsonDataEncoded = json_encode($jsonData);
    return $jsonDataEncoded;
}

function userSignup($name, $gender,$age, $email, $password)
{
    global $conn;
    if (!checkUser($email)) {
        $query = "INSERT INTO `sih_user` (name,gender,age,email,password) VALUES ('$name','$gender','$age','$email','$password')";
        if (mysqli_query($conn, $query)) {
            $status = 'Success';
        } else {
            $status = 'Failed';
        }
        $jsonData = array(
            'username' => $email,
            'status' => $status
        );
        $jsonDataEncoded = json_encode($jsonData);
        return $jsonDataEncoded;
    } else {
        echo error("User Already Exist");
    }
}
function checkUser($email)
{
    global $conn;
    $query = "SELECT * FROM `sih_user` WHERE email='$email'";
    $query = mysqli_query($conn, $query);
    if (mysqli_num_rows($query)) {
        return 1;
    } else
        return 0;
}

function error($msg)
{
    $jsonData = array(
        'status' => "Failed",
        'message' => $msg
    );
    $jsonDataEncoded = json_encode($jsonData);
    return $jsonDataEncoded;
}


function sell($type, $name, $email,$price, $expiry, $quantity,$image)
{
    global $conn;
    $query = "INSERT INTO medicines(`email`,`name`,`price`,`type`,`expiry`,`quantity`,`image`) VALUES ('$email','$name','$price','$type','$expiry','$quantity','$image')";
    $query = mysqli_query($conn, $query);
    if ($query) {
        $status = 'Success';
    } else {
        $status = 'Failed';
    }
    $jsonData = array(
        'status' => $status
    );
    $jsonDataEncoded = json_encode($jsonData);
    return $jsonDataEncoded;
}

function fetchMedicine($type,$sortBY)
{
    global $conn;
    $myArray = array();
    if($sortBY=="")
        $result = $conn->query("SELECT * FROM medicines WHERE type='$type' ORDER BY sl Desc");
    else
        $result = $conn->query("SELECT * FROM medicines WHERE type='$type' ORDER BY $sortBY");
    if ($result) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }
        return json_encode($myArray);
    } else
        return "Failed";
}


function fetchChat($user1, $user2)
{
    global $conn;
    $myArray = array();
    if ($result = $conn->query("SELECT * FROM `chats` WHERE (`from`='$user1' AND `to`='$user2')OR(`from`='$user2' AND `to`='$user1')")) {
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
        }
        return json_encode($myArray);
    } else
        return "Failed";
}



function sendMessage($from, $to,$message)
{
    global $conn;
    $date=date('d-m-Y H:i');
    $query = "INSERT INTO `chats` (`from`,`to`,`date`,`message`) VALUES ('$from','$to','$date','$message')";
    $query = mysqli_query($conn, $query);
    if ($query) {
        $status = 'Success';
    } else {
        $status = 'Failed';
    }
    $jsonData = array(
        'status' => $status
    );
    $jsonDataEncoded = json_encode($jsonData);
    return $jsonDataEncoded;
}

