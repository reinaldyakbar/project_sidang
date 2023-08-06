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
<section class="bg-white py-5" style="margin-top: 104px; margin-bottom: 8px;">
    <div class="row ">
        <div class="col-lg-12">
            <div class="text-center mb-5 mt-4">
                <h2 class="display-7 fw-bolder mb-5 "><span class="text-gradient d-inline ">Pengumuman Tugas Akhir <br>
                        Universitas Dian Nuswantoro</span></h2>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="card-info px-3 py-3 mb-3 " style="margin-top: 100px;">
            <!-- Tautan ke halaman lain dengan menggunakan elemen <a> -->
            <a href="<?php echo base_url('dashboard/isi_pengumuman') ?>" style="text-decoration: none; color: inherit;">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-9">
                        <h4>Info Pemilihan Dosen Pembimbing TA TI S1 Ganjil 2022/2023</h4>
                        <p>Diberitahukan kepada mahasiswa program studi TI S-1 yang mengambil Tugas Akhir yang belum
                            memiliki Dosen Pembimbing TA dapat mengajukan permohonan Dosen Pembimbing melalui Sistem
                            Pengajuan Dosen Pembimbing (SPDP) TA di alamat https://tatis1.dinus.web.id/...
                        </p>
                        <hr>
                        <p>By : Koordinator TA TI S-1</p>
                    </div>

                    <div class="col-lg-2">
                        <p>12 September 2022</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="card-info px-3 py-3 mb-3">
            <!-- Tautan ke halaman lain dengan menggunakan elemen <a> -->
            <a href="<?php echo base_url('dashboard/isi_pengumuman') ?>" style="text-decoration: none; color: inherit;">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-9">
                        <h4>Pengajuan Dosen Pembimbing TA/Skripsi TI S1 Semester Gasal 2021/2022</h4>
                        <p>Diberitahukan kepada mahasiswa program studi Teknik Informatika S1 yang belum
                            diplot/mendapatkan
                            Dosen Pembimbing TA di siadin. Harap dapat mengajukan permohonannya melalui aplikasi web
                            SPDP TA
                            yang dapat...
                        </p>
                        <hr>
                        <p>By : Koordinator TA TI S-1</p>
                    </div>

                    <div class="col-lg-2">
                        <p>07 September 2022</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- Tambahkan card-info lainnya dengan tautan ke halaman masing-masing -->
    </div>
</section>