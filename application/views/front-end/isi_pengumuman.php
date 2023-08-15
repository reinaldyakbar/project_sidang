<style>
    .card-info {
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 15px;
        transition: background-position 0.8s;
        /* Transisi animasi warna ke kanan selama 0.8 detik */
        position: relative;
        /* Menambahkan posisi relatif untuk membuat z-index bekerja */
        z-index: 1;
        /* Menetapkan z-index agar linear gradient tampil di atas latar belakang putih */
    }

    .card-info:before {
        content: "";
        background-image: linear-gradient(to right, #FF4C91 20%, #fff 80%);
        background-size: 200% 100%;
        background-position: left bottom;
        position: absolute;
        border-radius: 15px;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        /* Menempatkan latar belakang gradient di bawah latar belakang putih */
        opacity: 0;
        /* Mengatur opasitas menjadi 0 sehingga tidak terlihat saat tidak dihover */
        transition: opacity 0.8s;
        /* Transisi untuk opasitas saat dihover */
    }

    .card-info:hover:before {
        opacity: 1;
        border-radius: 15px;
        /* Mengubah opasitas menjadi 1 saat dihover */
    }
</style>
<div id="layoutSidenav_content">
    <div class="container my-5">
        <?php foreach ($pengumuman as $item) { ?>
            <div class="card-info px-4 py-5 mb-3" style="margin-top: 100px;">
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <h1>
                            <p>
                                <?php echo $item->judul; ?>
                            </p>
                        </h1>
                        <p>
                            <?php echo $item->tanggal; ?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <p style="line-height: 2;">
                        <p>
                            <?php echo $item->isi_pengumuman; ?>
                        </p>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <hr>
                        <p>
                        <p>
                            <?php echo $item->koordinator; ?>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>