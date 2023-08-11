<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="">Administrator</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar-->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="<?php echo base_url('admin') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link" href="<?php echo base_url('admin/dosbim') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                            Dosbim
                        </a>
                        <a class="nav-link" href="<?php echo base_url('pengumuman') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                            Pengumuman
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-info"></i></div>
                            Informasi
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?php echo base_url('informasi/info_ta1') ?>">TA 1</a>
                                <a class="nav-link" href="<?php echo base_url('informasi/info_ta2') ?>">TA 2</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="<?php echo base_url('jadwal/index') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-calendar-week"></i></div>
                            Jadwal
                        </a>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url('admin/logout') ?>">
                                    <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <?php if ($this->session->userdata('username')) { ?>
                        <div class="small">Logged in as:</div>
                        <div>
                            <?php echo $this->session->userdata('username') ?>
                        </div>
                    <?php } ?>
                </div>

            </nav>
        </div>