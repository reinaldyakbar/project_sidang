<div id="layoutSidenav_content">
    <section class="bg-white" style="margin-top: 50px; margin-bottom: 8px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <h2 class="display-7 fw-bolder mb-5"><span class="d-inline">Pengumuman Tugas Akhir<br>Universitas
                            Dian Nuswantoro</span></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-2 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item mb-5">
                            <div class="blog_details">
                                <table id="example" class="table-striped table-bordered table-responsive-sm">
                                    <thead class="text-black">
                                        <tr>
                                            <th class="text-center" width='3%'>
                                                No
                                            </th>
                                            <th class="text-center" width='80%'>
                                                Judul
                                            </th>
                                            <th class="text-center" width='17%'>
                                                Tanggal
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($pengumuman) && is_array($pengumuman)): ?>
                                            <?php foreach ($pengumuman as $index => $png): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $png->id; ?>
                                                    </td>
                                                    <td>
                                                        <a class="text-decoration-none"
                                                            href="<?php echo base_url('pengumuman/isi_pengumuman/' . $index); ?>">
                                                            <?php echo $png->judul; ?>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <?php
                                                        // Ubah format tanggal dari database ke format "tanggal, bulan tahun"
                                                        echo date('d F Y', strtotime($png->tanggal));
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>

                                </table>
                            </div>
                        </article>
                        <div class="text-center">
                            <a class="btn btn-primary"
                                href="<?php echo base_url('pengumuman/tambah_pengumuman') ?>">Tambah Pengumuman</a>
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
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>