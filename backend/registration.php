<?php
session_start();
include('connection.php');

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$full_name = htmlspecialchars($_POST['full_name']);
$email = htmlspecialchars($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if($full_name == '' || $email == '' || $_POST["password"] == ''){
    
    $_SESSION['error'] = "All Field Must Be Field";
    $_SESSION['full_name'] = $_POST['full_name'];
    $_SESSION['email'] = $_POST['email'];
    header("location: http://localhost/daftarsiswa/registration.php");
    die();
}

$sql = "INSERT INTO users(full_name , password , email) VALUES('$full_name', '$password', '$email');";

if ($connections->query($sql)){
    
    $_SESSION['mesage'] = "Register has been added success";
    header("location: http://localhost/daftarsiswa/login.php");

    $connections->close();
    die();
}

echo "Error: " . $sql . "<br>" . $connections->error;
// var_dump($_POST);
?>