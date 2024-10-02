<?php 
session_start();

if(isset($_SESSION['is_login']) == false){
    header("location: http://localhost/daftarsiswa/login.php");

}
$title ="CREAT STUDENT | DAFTAR SISWA";

include('isi/header.php')?>

    <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="/daftarsiswa/"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h3 class="panel-title">Create</h3>
                <form method="POST" action="/daftarsiswa/backend/creat.php">
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-users"></i></span>
                        <input type="text" class="form-control" placeholder="Umur" name="age">
                    </div>
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-home"></i></span>
                        <input type="text" class="form-control" placeholder="Major" name="major">
                    </div>
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-building"></i></span>
                        <input type="text" class="form-control" placeholder="Class" name="class">
                    </div>
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-note"></i></span>
                        <select type="text" class="form-control" name="keterangan">
                            <option value="">PILIH KETERANGAN</option>
                            <option value="HADIR">HADIR</option>
                            <option value="IZIN">IZIN</option>
                            <option value="SAKIT">SAKIT</option>
                            <option value="ALFA">ALFA</option>
                        </select>
                    </div> 
                    </div>
                    <button class="btn btn-primary w-100 login-btn">Create</button>
                </form>
                
            </div>
        </div>

   