<?php 
session_start();

if(isset($_SESSION['is_login']) == false){
    header("location: http://localhost/daftarsiswa/login.php");

}
$title ="UPDATE | DAFTAR SISWA";

include('isi/header.php');
include('backend/detail.php');
?>

    <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="/daftarsiswa/"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h3 class="panel-title">UPDATE STUDENT</h3>
                <form method="POST" action="/daftarsiswa/backend/update.php">
                    <?php foreach ($student as $detail) : ?>
                        <input type="hidden" name="id" value="<?= $detail['id'] ?>">
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Name"
                        name="name"
                        value="<?= $detail['name'] ?>">
                    </div>

                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-users"></i></span>
                        <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Umur"
                        name="age"
                        value="<?= $detail['age'] ?>">
                    </div>

                    <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-home"></i></span>
                        <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Jurusan"
                        name="major"
                        value="<?= $detail['major'] ?>">
                    </div>

                    <div class="input-group mb-25">
                    <span class="input-group-text"><i class="fa-regular fa-building"></i></span>
                        <input 
                        type="text" 
                        class="form-control" 
                        placeholder="Kelas"
                        name="class"
                        value="<?= $detail['class'] ?>">
                    </div>

                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-note"></i></span>
                        <select type="text" class="form-control" name="keterangan">
                            <option value="">PILIH KETERANGAN</option>
                            <option value="HADIR" <?= $detail['keterangan'] == "HADIR" ? 'selected' : '' ?>>HADIR</option>
                            <option value="IZIN" <?= $detail['keterangan'] == "IZIN" ? 'selected' : '' ?>>IZIN</option>
                            <option value="SAKIT" <?= $detail['keterangan'] == "SAKIT" ? 'selected' : '' ?>>SAKIT</option>
                            <option value="ALFA" <?= $detail['keterangan'] == "ALFA" ? 'selected' : '' ?>>ALFA</option>
                        </select>
                        
                    </div>
                    </div>
                    <?php endforeach; ?>
                    
                    <button class="btn btn-primary w-100 login-btn">Edit</button>
                </form>
                
            </div>
        </div>

 
    

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
