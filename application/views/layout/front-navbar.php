<body>
    <header>
        <div class="navbar-area">
            <div class="container" style="background: linear-gradient(to right, #1488cc, #2b32b2); border-radius: 0 0 25px 25px;">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg" id="navbar">
                            <a class="navbar-brand" href="<?php echo base_url('dashboard') ?>">
                                <img src="<?php echo base_url() ?>assets/front-end/assets/images/lgo.png" alt="logo" width="200" height="50" class="d-inline-block align-text-top">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                                    <li class="nav-item mx-1"><a class="nav-link" href="<?php echo base_url('dashboard') ?>">Home</a></li>
                                    <li class="nav-item dropdown mx-1">
                                        <a class="nav-link dropdown-toggle" href="#" id="informasiDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Informasi TA
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="informasiDropdown">
                                            <!-- Opsi 1 -->
                                            <li><a class="dropdown-item text-black text-center" href="<?php echo base_url('dashboard/info_ta1') ?>">Tugas Akhir
                                                    1</a></li>
                                            <!-- Opsi 2 -->
                                            <li><a class="dropdown-item text-black text-center" href="<?php echo base_url('dashboard/info_ta2') ?>">Tugas Akhir
                                                    2</a></li>
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
                            <!-- navbar collapse -->
                        </nav>
                        <!-- navbar -->
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>