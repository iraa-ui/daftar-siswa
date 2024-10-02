<?php
include("connection.php");

$id = $_GET['id'];
$sql = "DELETE FROM list_siswa WHERE id=$id";

if($connections->query($sql)){
    session_start();
    $_SESSION['deleted'] = "Student has been deleted success";
    header("location: http://localhost/daftarsiswa");
    die();
}

echo "ERROR: " . $sql . "</br>" . $connections->error;
$connections->close();