
<section class="login">
      <div class="login-left w-50 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-6">
            <div class="header">
              <h1 class="text-decoration-none text-center">Halo, Giver Jember!</h1>
              <p class="text-center">Selamat datang kembali di aplikasi kami.</p >
            </div>
    
            <div class="login-form">
              <label for="email1" class="form-label">Email</label>
              <input type="email" class="form-control" id="email1" 
              placeholder="ketik email">
    
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" 
              placeholder="ketik password">
              <a href="forgotpassword.html" >Forgot Password</a>
              <button class="signin">Masuk</button>
              <div class="text-center">
                <span class="d-inline">Tidak Memiliki akun? <a href="signup.html" class="signup d-inline text-decoration-none">Daftar</a>
                </span>
              </div>  
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
    

