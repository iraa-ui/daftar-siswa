<?php 

$students = [
    [
        "nama" => "ira",
         "kelas" => "XI",
         "jurusan" => "PPLG",
         "umur" => 15,
         "keterangan" => "hadir",
     ],
 
    [
        "nama" => "haifazahra",
         "kelas" => "XI",
         "jurusan" => "PPLG",
         "umur" => 17,
         "keterangan" => "sakit",
     ],
 
];

echo count($students[0])
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar siswa</h1>
    <?php foreach ($students as $student) : ?>
        <ul style="margin-bottom: 20px;">
            <li>Nama: <?php echo $student['nama'] ?></li>
            <li>Kelas: <?php echo $student['kelas'] ?></li>
            <li>Jurusan: <?php echo $student['jurusan'] ?></li>
            <li>Umur: <?php echo $student['umur'] ?></li>
            <li>Keterangan: <?php echo $student['keterangan'] ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>