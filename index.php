<?php
session_start();
$title ="HOME | DASHBOARD";
 include('isi/header.php');
 include('backend/data.php');

//echo count($students[0])
$number = 1;

?>

<div class="main-content">
<div class="col-xxl-12">
                <div class="panel">
                    <div class="panel-header">
                        <h1>Daftar siswa</h1>
                        <a class="btn btn-success" href="/daftarsiswa/creat-student.php"><i class="fa-solid fa-plus"></i>Tambah</a >
                    </div>
                    <div class="panel-body">
                        <?php if (isset($_SESSION['message'])) : ?>
                            <div class="alert alert-success text-center">
                                <?php echo $_SESSION['message'];
                                unset($_SESSION['message']);
                                ?>
                            </div>
                            <?php endif ?>
                            <?php if (isset($_SESSION['deleted'])) : ?>
                            <div class="alert alert-danger text-center">
                                <?php echo $_SESSION['deleted'];
                                unset($_SESSION['deleted']);
                                ?>
                            </div>
                            <?php endif ?>
                            <?php if (isset($_SESSION['updated'])) : ?>
                            <div class="alert alert-warning text-center">
                                <?php echo $_SESSION['updated'];
                                unset($_SESSION['updated']);
                                ?>
                            </div>
                            <?php endif ?>
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
                                    <td><?= $student['name'] ?></td>
                                    <td><?= $student['class'] ?></td>
                                    <td><?= $student['major'] ?></td>
                                    <td><?= $student['age'] ?></td>

                                    <td> <?php
                                         if($student['keterangan'] == 'HADIR'){
                                            echo '<span class="bg-success p-2 rounded text-light">HADIR</span>';
                                         }
                                         else if ($student['keterangan'] == 'IZIN'){
                                            echo '<span class="bg-info p-2 rounded text-light">IZIN</span>';
                                         }
                                         else if($student['keterangan'] == 'SAKIT'){
                                            echo '<span class="bg-warning p-2 rounded text-light">SAKIT</span>';
                                         }
                                         else{
                                            echo '<span class="bg-danger p-2 rounded text-light">ALFA</span>';
                                         }
                                             
                                          ?></td>                                  
                                    <td>
                                        <div class="btn-box">
                                        <a href="/daftarsiswa/detail.php?id=<?= $student['id']?>"><i class="fa-light fa-eye"></i></a>
                                        <a href="/daftarsiswa/update.php?id=<?= $student['id']?>"><i class="fa-light fa-pen"></i></a>
                                        <a href="/daftarsiswa/backend/delete.php?id=<?= $student['id']?>"><i class="fa-light fa-trash"></i></a>
                                        
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
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
