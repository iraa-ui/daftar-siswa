<?php
 include('isi/header.php');

$students = [
    [
        "nama" => "ira",
         "kelas" => "XI",
         "jurusan" => "PPLG",
         "umur" => 15,
         "keterangan" => "Hadir",
     ],
 
    [
        "nama" => "haifazahra",
         "kelas" => "XI",
         "jurusan" => "PPLG",
         "umur" => 17,
         "keterangan" => "Sakit",
     ],
 
];

//echo count($students[0])
$number = 1;
?>

<div class="main-content">
<div class="col-xxl-12">
                <div class="panel">
                    <div class="panel-header">
                        <h1>Daftar siswa</h1>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Umur</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($students as $student) : ?>
                                <tr>
                                    <td><?= $number++ ?></td>
                                    <td><?= $student['nama'] ?></td>
                                    <td><?= $student['kelas'] ?></td>
                                    <td><?= $student['jurusan'] ?></td>
                                    <td><?= $student['umur'] ?></td>

                                    <td> <?=
                                          $student['keterangan'] == "Hadir" ?
                                             '<span class="bg-success p-2 rounded text-light">Hadir</span>' :
                                             '<span class="bg-danger p-2 rounded text-light">Sakit</span>'
                                          ?></td>                                  
                                    <td>
                                        <div class="btn-box">
                                            <button><i class="fa-light fa-eye"></i></button>
                                            <button><i class="fa-light fa-pen"></i></button>
                                            <button><i class="fa-light fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer start -->
        <div class="footer">
            <p>Copyright©
                <script>document.write(new Date().getFullYear())</script> All Rights Reserved By <span
                    class="text-primary">Digiboard</span>
            </p>
        </div>
        <!-- footer end -->
    

</div>
</div>
    <!-- main content end -->

    <script src="assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="assets/vendor/js/apexcharts.js"></script>
    <script src="assets/vendor/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/js/moment.min.js"></script>
    <script src="assets/vendor/js/daterangepicker.js"></script>
    <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
