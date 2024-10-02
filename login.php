<?php 
$title ="LOGIN | DAFTAR SISWA";
session_start();
include('isi/header.php')?>

    <div class="main-content login-panel">
        <div class="login-body">
            <div class="top d-flex justify-content-between align-items-center">
                <div class="logo">
                    <img src="assets/images/logo-black.png" alt="Logo">
                </div>
                <a href="index.html"><i class="fa-duotone fa-house-chimney"></i></a>
            </div>
            <div class="bottom">
                <h3 class="panel-title">Login</h3>
                <?php if (isset($_SESSION['mesage'])) : ?>
                            <div class="alert alert-success danger text-center">
                                <?php echo $_SESSION['mesage'];
                                unset($_SESSION['mesage']);
                                ?>
                            </div>
                            <?php endif ?>
                <?php if (isset($_SESSION['error'])) : ?>
                            <div class="alert alert-danger danger text-center">
                                <?php echo $_SESSION['error'];
                                unset($_SESSION['error']);
                                ?>
                            </div>
                            <?php endif ?>
                <form method="POST" action="/backend/auth.php">
                    <div class="input-group mb-25">
                        <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                        <input type="text" 
                        class="form-control" 
                        placeholder="Username or email address"
                        name="email"
                        value="<?= isset($_SESSION["email"]) ? $_SESSION["email"] : '' ?>"
                        >
                    </div>
                    <div class="input-group mb-20">
                        <span class="input-group-text"><i class="fa-regular fa-lock"></i></span>
                        <input type="password" 
                        class="form-control rounded-end" 
                        placeholder="Password"
                        name="password"
                        value="<?= isset($_SESSION["password"]) ? $_SESSION["password"] : '' ?>"
                        >
                        <a role="button" class="password-show"><i class="fa-duotone fa-eye"></i></a>
                    </div>
                   
                    <button class="btn btn-primary w-100 login-btn">Sign in</button>
                    <div class="mt-3">Dont have an Account? <a href="/daftarsiswa/registration.php"> Click Here!</div></a>            
                </form>
                
            </div>
        </div>

     <?php include('isi/footer.php')?>