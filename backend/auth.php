<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['email'] = $email;
$_SESSION['password'] = $password;

if($email == "" || $password == "") {
    
    $_SESSION['error'] = "All Field Must Be Field";
    header("location: http://localhost/daftarsiswa/login.php");
    die();
}

$sql = "SELECT * FROM users WHERE email='$email'";
$user = mysqli_query($connections, $sql);

if ($user ->num_rows == 0) {
    $_SESSION['error'] = "Email not registered";
    header("location: http://localhost/daftarsiswa/login.php");
    die();
}

$auth = $user->fetch_assoc();

if (password_verify($password, $auth['password'])){
    
}