<?php
$title ="HOME | DASHBOARD";
 include('isi/header.php');
 include('backend/detail.php');

//echo count($students[0])
$number = 1;
?>

<div class="main-content">
<div class="col-xxl-12">
                <div class="panel">
                    <div class="panel-header py-4">
                        <h1>DETAIL SISWA <?= $id ?></h1>
                        <a class="btn btn-success" href="/daftarsiswa/index.php"><i class="fa-solid fa-arrow-left"></i>Kembali</a >
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <?php foreach ($student as $detail) : ?>
                                <tr>
                                    <th>Nama</th>
                                    <th><?= $detail['name'] ?></th>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <th><?= $detail['class'] ?></th>
                                </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <th><?= $detail['major'] ?></th>
                                </tr>
                                <tr>
                                    <th>Umur</th>
                                    <th><?= $detail['age'] ?></th>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <th><?= $detail['keterangan'] ?></th>
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
