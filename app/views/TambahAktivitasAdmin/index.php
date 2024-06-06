<div class="container">
        <h1>TAMBAHKAN DATA AKTIVITAS PANTI</h1>
        <div class="box">
            <div class="container1">
                <div class="foto">
                    <label for="foto">Tambahkan Foto</label>
                    <input type="file" id="foto" placeholder="Masukkan Foto" />
                </div>
            </div>
            <div class="container2">
                <form action="#">
                    <div class="form-group">
                        <input type="date" class="form-control" id="tanggal-lahir" placeholder="Masukkan Tanggal Lahir" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama" placeholder="Judul" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="deskripsi" placeholder="Deskripsi"></textarea>
                    </div>                    
                    <div class="tombol">
                        <button type="button" class="button" onclick="kembaliKeAktivitasPanti()">Selesai</button>
                        <button type="submit" class="button">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>