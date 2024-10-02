<?php

include("connection.php");

$name = htmlspecialchars($_POST['name']);
$class = htmlspecialchars($_POST['class']);
$age = htmlspecialchars($_POST['age']);
$major = htmlspecialchars($_POST['major']);
$keterangan = htmlspecialchars($_POST['keterangan']);

$sql = "INSERT INTO list_siswa(name, class, age, major, keterangan) VALUES('$name', '$class', $age, '$major', '$keterangan')";

if ($connections->query($sql)){
    session_start();
    $_SESSION['message'] = "Student has been added success";
    header("location: http://localhost/daftarsiswa");
    die();
}

echo "ERROR: " . $sql . "</br>" . $connections->error;
$connections->close();
