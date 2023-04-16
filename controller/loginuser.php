<?php
session_start();
include "../inc/env.php";
//$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$query = "SELECT * from users WHERE email = '$email'";
$response = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($response);



//LOGIN FOR

if($response->num_rows > 0){
//* EMAIL EXISTS DB
//var_dump(password_verify($password, $user['password']));

$isPasswordTrue = password_verify($password, $user['password']);
if($isPasswordTrue){
    $_SESSION['auth'] = $user;
    header("Location: ../backend/index.php");
}else{
    $_SESSION['error_msg'] = 'Please enter a valid Password';
    header("location: ../login.php");
}


}else{
    $_SESSION['error_msg'] = 'Please enter a valid Email address';
    header("location: ../login.php");
}