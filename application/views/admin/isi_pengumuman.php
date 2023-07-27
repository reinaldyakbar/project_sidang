<div id="layoutSidenav_content">
    <section class="bg-white py-5" style="margin-top: 20px; margin-bottom: 8px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-4">
                        <h2 class="display-7 fw-bolder mb-5">
                            <span class="text-gradient d-inline">Pengumuman Tugas Akhir <br> Universitas Dian
                                Nuswantoro</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container shadow">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 posts-list">
                    <div class="single-post">
                        <div class="blog_details">
                            <?php if (isset($pengumuman) && is_array($pengumuman)): ?>
                                <?php foreach ($pengumuman as $png): ?>
                                    <?php if ($png->id == $id_pengumuman): ?> <!-- Memeriksa ID pengumuman -->
                                        <h1 class="mt-5">
                                            <?php echo $png->judul; ?>
                                        </h1>
                                        <p class="blog-info-link mt-3 mb-4">
                                            <i class="fa fa-time me-2"></i>
                                            <?php echo date('d F Y', strtotime($png->tanggal)); ?> <!-- Menggunakan strtotime -->
                                        </p>

                                        <br><br>
                                        <p class="text-justify">
                                            <?php echo $png->isi_pengumuman; ?>
                                        </p>
                                        <p>
                                            <br />
                                            Hormat kami,<br />
                                            Koordinator TA<br />
                                            <br />
                                            <?php echo $png->koordinator; ?>
                                        </p>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    $(document).ready(function () {
        new DataTable('#example');
    });
</script>