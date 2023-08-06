<nav class="navbar navbar-expand-lg menu navbar-dark fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url('dashboard') ?>">
            <img src="<?php echo base_url() ?>assets/front-end/assets/images/lgo.png" alt="logo" width="200" height="50" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item mx-1"><a class="nav-link" href="<?php echo base_url('dashboard') ?>">Home</a>
                </li>
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Informasi TA
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                        <!-- Opsi 1 -->
                        <li><a class="dropdown-item text-black text-center" href="<?php echo base_url('dashboard/info_ta1') ?>">Tugas Akhir 1</a></li>
                        <!-- Opsi 2 -->
                        <li><a class="dropdown-item text-black text-center" href="<?php echo base_url('dashboard/info_ta2') ?>">Tugas Akhir 2</a></li>
                    </ul>
                </li>
                <li class="nav-item mx-1"><a class="nav-link" href="<?php echo base_url('dashboard/dosbim') ?>">Dosbim</a>
                </li>
                <li class="nav-item mx-1"><a class="nav-link" href="<?php echo base_url('dashboard/pengumuman') ?>">Pengumuman</a>
                </li>
                <li class="nav-item mx-1"><a class="nav-link" href="<?php echo base_url('dashboard/jadwal') ?>">Jadwal</a></li>
                <li class="nav-item mx-1"><a class="nav-link" href="<?php echo base_url('dashboard/kontak') ?>">Kontak</a></li>
            </ul>
        </div>
    </div>

    <!-- navbar collapse -->
</nav>
<!-- navbar area -->
<div id="home" class="intro-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-12 col-sm-12 ">
                <div class="container mt-lg-5">
                    <div class="header-hero-content text-center pt-sm-5" style="margin-top: 80px;" data-aos="fade-right" data-aos-duration="1500">
                        <h2 class="header-title mt-sm-5">Media Informasi Tugas Akhir</h2>
                        <p class="text text-title">Fakultas Ilmu Komputer - Teknik Informatika</p>
                        <p class="text text-title mt-1">Universitas Dian Nuswantoro</p>
                    </div>
                </div>
            </div>
            <!-- header hero content -->
            <div class="col-lg-7 col-md-12 col-sm-12 mt-md-5 mb-md-5" data-aos="fade-left" data-aos-duration="1500">
                <img src="<?php echo base_url() ?>assets/front-end/assets/images/banner1.svg" alt="" class="mt-lg-5 ms-lg-5">
            </div>
        </div>
    </div>
    <svg class="frame" width="100%" height="100%" viewBox="0 0 1400 320" fill="#fffff" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.0244141 213.32L64.0228 234.652C128.021 255.984 256.018 298.648 384.015 277.316C512.012 255.984 640.008 170.656 768.005 177.722C896.002 185.321 1024 283.982 1152 270.249C1279.99 255.984 1407.99 127.992 1535.99 99.5934C1663.98 70.6619 1791.98 142.657 1855.98 177.722L1919.98 213.32V426.64H1855.98C1791.98 426.64 1663.98 426.64 1535.99 426.64C1407.99 426.64 1279.99 426.64 1152 426.64C1024 426.64 896.002 426.64 768.005 426.64C640.008 426.64 512.012 426.64 384.015 426.64C256.018 426.64 128.021 426.64 64.0228 426.64H0.0244141V213.32Z" fill="white" />
    </svg>
</div>
<!-- About Section-->

<!-- card -->
<section class="bg-white py-5 my-5 mt-md-5">
    <!-- START THE MARKETING CONTENT  -->
    <div class="container" style="background-image: url('<?php echo base_url() ?>assets/front-end/assets/images/section1.svg'); height: 400px;">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                <div class="services__content" data-aos="fade-right" data-aos-duration="1000">
                    <div class="icon d-block fas fa-paper-plane"></div>
                    <h3 class="display-3--title mt-1 txt-gradient">Tugas Akhir </h3>
                    <p class="lh-lg">
                        Tugas Akhir adalah proyek penelitian dan pengembangan yang dijalankan oleh mahasiswa sebagai tahap akhir studi. Fokusnya pada pemecahan masalah teknologi melalui penggunaan konsep, algoritma, dan pemrograman. Tujuannya menguji pemahaman mahasiswa tentang aplikasi praktis teori dan menciptakan solusi inovatif dalam bidang komputer.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end" data-aos="fade-left" data-aos-duration="1000">
                <div>
                    <img src="<?php echo base_url() ?>assets/front-end/assets/images/p2.svg" alt="..." class="h-75 w-75">
                </div>
            </div>
        </div>
    </div>

    <!-- START THE WEB DEVELOPMENT CONTENT  -->
    <div class="container" style="background-image: url('<?php echo base_url() ?>assets/front-end/assets/images/section2.svg'); height: 400px;">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start" data-aos="fade-right" data-aos-duration="1000">
                <div>
                    <img src="<?php echo base_url() ?>assets/front-end/assets/images/img-2-600.png" alt="..." class="h-75 w-75">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                <div class="services__content" data-aos="fade-left" data-aos-duration="1000">
                    <div class="icon d-block fas fa-code"></div>
                    <h3 class="display-3--title mt-1 txt-gradient">Ruang Sidang Akhir</h3>
                    <p class="lh-lg">
                        Ruang Sidang Akhir berada di Gedung H Fakultas Ilmu Komputer lantai 6
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- START THE CLOUD HOSTING CONTENT  -->
    <div class="container" style="background-image: url('<?php echo base_url() ?>assets/front-end/assets/images/section3.svg'); height: 400px;">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
                <div class="services__content" data-aos="fade-right" data-aos-duration="1000">
                    <div class="icon d-block fas fa-cloud-upload-alt"></div>
                    <h3 class="display-3--title mt-1 txt-gradient">Gedung H Fakultas Ilmu Komputer</h3>
                    <p class="lh-lg">
                        Ruang Koordinator Tugas Akhir Program Studi Teknik Informatika berada di gedung H Fakultas Ilmu Komputer yang berada di ruang H.2.1
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end" data-aos="fade-left" data-aos-duration="1000">
                <div>
                    <img src="<?php echo base_url() ?>assets/front-end/assets/images/dinus600.jpg" alt="..." class="h-75 w-75">
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Informasi Tugas Akhir -->
<section class="py-5">
    <div class="container px-5 rounded-4" style="background-image: url('<?php echo base_url() ?>assets/front-end/assets/images/info.svg'); background-size: cover;" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="100">
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="text-center my-5">
                    <h2 class="display-7 fw-bolder mb-5 "><span class="text-white d-inline ">Informasi Tugas
                            Akhir</span></h2>
                    <div class="d-flex justify-content-center fs-5 gap-1 ">
                        <h3 class="paragraf1"><a href="<?php echo base_url('dashboard/info_ta1') ?>" class="text-white text-decoration-none"> Tugas Akhir 1</a></h3>
                        <h3 class="paragraf1"><a href="<?php echo base_url('dashboard/info_ta2') ?>" class="text-white text-decoration-none"> Tugas Akhir 2</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- informasi end -->

<!-- Profil Dosbim -->
<section class="bg-light py-5 my-5">
    <div class="container px-5 ">
        <div class="container ">
            <div class="row mb-2">
                <div class="col-6 " data-aos="fade-right" data-aos-duration="2000">
                    <h5 class="txt-profil">Profil Dosen Pembimbing</h5>
                </div>
                <div class="col-6 text-end " data-aos="fade-left" data-aos-duration="2000">
                    <a href="<?php echo base_url('dashboard/dosbim') ?>" class="text-gradient text-decoration-none text-judul">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-12 col-md-12">
                <div class="text-center my-2 ">
                    <div class="container ">
                        <div class="row justify-content-between">
                            <?php $count = 0;
                            foreach ($dosbim as $dsn) : ?>
                                <?php if ($count < 5) : ?>
                                    <div class="col-lg-2 col-md-6 col-sm-4 mb-3 " data-aos="fade-up" data-aos-duration="2000">
                                        <div class="card rounded-5 border-0" style="width: 170px; height: 270px">
                                            <img src="<?php echo base_url('uploads/' . $dsn->gambar); ?>" class="card-img-top card2" alt="Profile Picture 1" style="border-radius: 35px;">
                                            <div class="card-body ">
                                                <h5 class="card-title small">
                                                    <?php echo $dsn->nama; ?>
                                                </h5>
                                                <h6 class="card-title card-sub-title">
                                                    <?php echo $dsn->bidang; ?>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php $count++; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- card -->
<!-- pengumuman -->
<section class="py-5 my-5">
    <div class="container px-5">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-7 col-md-8 col-sm-6 text-center" data-aos="fade-right" data-aos-duration="2000">
                <div class="card rounded-5" style="border-color:#3257dc;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center my-4">
                                <h3>Pengumuman Tugas Akhir</h3>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn-1 border-0 bg-white rounded-3">
                                    <a href="pengumuman.html" class="btn text-start">
                                        <h4>Info Pemilihan Dosen Pembimbing TA TI S1 Ganjil 2022/2023</h4>
                                        <p class="text-start">By : Koordinator TA TI S-1</p>
                                        <hr>
                                    </a>
                                </button>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn-1 border-0 bg-white rounded-3">
                                    <a href="pengumuman.html" class="btn text-start">
                                        <h4>Info Pemilihan Dosen Pembimbing TA TI S1 Ganjil 2022/2023</h4>
                                        <p class="text-start">By : Koordinator TA TI S-1</p>
                                        <hr>
                                    </a>
                                </button>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <button class="btn-1 border-0 bg-white rounded-3">
                                    <a href="pengumuman.html" class="btn text-start">
                                        <h4>Info Pemilihan Dosen Pembimbing TA TI S1 Ganjil 2022/2023</h4>
                                        <p class="text-start">By : Koordinator TA TI S-1</p>
                                        <hr>
                                    </a>
                                </button>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <a href="pengumuman.html" class="btn text-start">
                                    <h5 class="text-gradient">Selengkapnya</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-6 text-center" data-aos="fade-left" data-aos-duration="2000">
                <div class="card rounded-5" style="border-color:#FF5F6D;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center my-4">
                                <h3>Jadwal</h3>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn-1 border-0 bg-white rounded-3">
                                    <a href="<?php echo base_url('dashboard/jadwal') ?>" class="btn text-start">
                                        <h5>Pendaftaran Sidang TA 1</h5>
                                        <p>18 s.d 28 Juli 2023</p>
                                        <hr>
                                    </a>
                                </button>

                            </div>
                            <div class="col-lg-12">
                                <button class="btn-1 border-0 bg-white rounded-3">
                                    <a href="<?php echo base_url('dashboard/jadwal') ?>" class="btn text-start">
                                        <h5>Pendaftaran Sidang TA 2</h5>
                                        <p>18 s.d 28 Juli 2023</p>
                                        <hr>
                                    </a>
                                </button>
                            </div>

                            <div class="col-lg-12 mb-4">
                                <a href="<?php echo base_url('dashboard/jadwal') ?>" class="btn text-start">
                                    <h5 class="text-gradient">Selengkapnya</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- pengumuman end -->

<script>
    // main.js atau index.js atau file JavaScript utama Anda

    if ('Notification' in window && 'serviceWorker' in navigator) {
        // Cek apakah Notifikasi didukung dan service worker tersedia di browser
        Notification.requestPermission(status => {
            console.log('Notifikasi izin status:', status);
        });
    }
</script>