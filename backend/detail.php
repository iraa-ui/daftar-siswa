<?php
include("connection.php");

$id = $_GET['id'];

$sql = "SELECT * FROM list_siswa WHERE id=$id";

$student = mysqli_query($connections, $sql);