<?php
session_start();

if(isset($_SESSION['is_login']) == false){
    header("location: http://localhost/daftarsiswa/login.php");

}
include("connection.php");

$students = [];

$sql = "SELECT * FROM list_siswa";

$students = mysqli_query($connections, $sql);

$connections->close(); 


