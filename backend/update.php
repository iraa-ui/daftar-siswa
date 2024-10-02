<?php

include("connection.php");

if(isset($_POST['id'])) {
    
    $id = htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']);
    $class = htmlspecialchars($_POST['class']);
    $age = htmlspecialchars($_POST['age']);
    $major = htmlspecialchars($_POST['major']);
    $keterangan = htmlspecialchars($_POST['keterangan']);
    
    $sql = "UPDATE list_siswa SET name='$name', class='$class', age=$age, major='$major', keterangan='$keterangan' WHERE id=$id";

    if ($connections->query($sql)){
    session_start();
    $_SESSION['updated'] = "Student has been updated success";
    header("location: http://localhost/daftarsiswa");
    die();
}

}
die();



$id = $_GET['id'];

$sql = "SELECT * FROM list_siswa WHERE id=$id"; 

$student = mysqli_query($connections, $sql);

$connections->close();

