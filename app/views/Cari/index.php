
<section class="home" id="home">

    <div class="content" >
        <h3>Cari Panti</h3>
        <h1>Bergabunglah dalam perjalanan kemanusiaan anda dengan mencari panti yang ingin anda bantu. Kami memahami bahwa kebaikan hati anda adalah langkah pertama yang luar biasa, dan untuk memudahkan langka anda selanjutnya, 
            kami hadirkan untuk anda akses cepat dan mudah ke panti-panti asuhan di Jember.</h1>
    </div>
</section>

<!-- <div>
<div class="konten-caripanti">
    <div class="gambarcaripanti">
        <img src="<?= BASEURL; ?>/img/client/CariPanti/1-caripanti.jpg " alt="img">
    </div>
</div> -->

<div class="container-filter">
        <form method="post">
            <div class="select">
                <label for="kecamatan">Pilih Kecamatan</label>
                <select class="filter-select" id="kecamatan" name="kecamatan">
                    <option value="">Pilih Kecamatan</option>
                    <?php
                    // Ambil data kecamatan dari model dan tampilkan di dropdown
                    $result = $data['model']->getKecamatan();
                    foreach ($result as $row) {
                        echo '<option value="' . $row['id_kecamatan'] . '">' . $row['nama_kecamatan'] . '</option>';
                    }
                    ?>
                </select>
                <button type="submit" class="search-button">Search</button>
            </div>
        </form>
    </div>


    <div class="card-container">
        <?php
        // Tampilkan data panti jika array 'panti' ada dan bukan null
        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as $panti) {
                echo '<div class="card">';
                echo '<img src="<?= BASEURL; ?>/img/client/CariPanti/1.png" class="card-img-top gambar-card" alt="...">';
                echo '<div class="card-body">';
                echo '<div class="d-flex justify-content-between">';
                echo '<h5 class="card-title fw-bold fs-5">' . $panti['Nama_panti'] . '</h5>';
                echo '<div class="tanggal">';   
                echo '<p class="fs-6">' . $panti['tanggal'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '<p class="card-text fs-6 mt-3">' . (isset($panti['Alamat']) ? $panti['Alamat'] : '') . '</p>';
                // echo '<p class="card-text fs-6 mt-3">' . $panti['Alamat'] . '</p>';
                echo '<a href="#" class="btn btn-primary">Lihat Detail</a>';
                echo '</div></div>';
            }
        }
        ?> 
    </div>
    <?php var_dump($data['data']) ?>
    <?php echo $data['data']['Panti'][0]['Alamat'] ?>



    <!-- <div class="card">
        <img src="<?= BASEURL; ?>/img/client/CariPanti/1.png" class="card-img-top gambar-card" alt="...">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title fw-bold fs-5">Card title 1</h5>
                <div class="tanggal">
                    <p class="fs-6">20 November 2023</p>
                </div>
            </div>

            <p class="card-text fs-6 mt-3">
                Jalan Mastrip II No.75, Lingkungan Panji, Tegalgede, Kec. Sumbersari,
                Kabupaten Jember, Jawa Timur 68121
            </p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
        </div>
    </div>

    <div class="card">
        <img src="<?= BASEURL; ?>/img/client/CariPanti/1.png" class="card-img-top gambar-card" alt="...">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h5 class="card-title fw-bold fs-5">Card title 1</h5>
                <div class="tanggal">
                    <p class="fs-6">20 November 2023</p>
                </div>
            </div>

            <p class="card-text fs-6 mt-3">
                Jalan Mastrip II No.75, Lingkungan Panji, Tegalgede, Kec. Sumbersari,
                Kabupaten Jember, Jawa Timur 68121
            </p>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
        </div>
    </div>
</div> -->

<div class="pagination justify-content-center">
    <a href="#" class="arrow" onclick="changePage('back')"><img src="<?= BASEURL; ?>/img/client/CariPanti/back.png"
            alt="Back"></a>
    <a href="#" class="active" onclick="changePage(1)">1</a>
    <a href="#" onclick="changePage(2)">2</a>
    <a href="#" onclick="changePage(3)">3</a>
    <a href="#" class="arrow" onclick="changePage('next')"><img src="<?= BASEURL; ?>/img/client/CariPanti/next.png"
            alt="Next"></a>
    <a href="#" onclick="changePage('last')">Last Page</a>

</div>

 <br> <br><br> <br><br> <br><br> <br>
</div>
<script src="<?= BASEURL; ?>/js/cari.js"></script> 
