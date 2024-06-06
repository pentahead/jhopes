<section class="login d-flex">
    <div class="login-left w-50 h-100 d-flex justify-content-center align-items-center">
        <div class="col-6">
            <div class="header">
                <h1 class="text-decoration-none text-center">Lupa Password</h1>
                <p class="text-center">Masukkan email Anda untuk mereset password.</p>
            </div>

            <div class="login-form">
                <label for="forgotEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="forgotEmail" placeholder="Masukkan email Anda">

                <button class="signin mt-3">Reset Password</button> <!-- Tambah margin-top di sini -->
                <div class="text-center">
                    <span class="d-inline">Ingat password Anda? <a href="#" class="signup d-inline text-decoration-none">Masuk</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="login-right w-50 h-100">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= BASEURL; ?>/img/admin/akun/1.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?= BASEURL; ?>/img/admin/akun/2.png" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="<?= BASEURL; ?>/img/admin/akun/3.png" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
