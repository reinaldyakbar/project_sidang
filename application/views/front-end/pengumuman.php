<section class="bg-white py-5" style="margin-top: 104px; margin-bottom: 8px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center mb-5 mt-4">
                <h2 class="display-7 fw-bolder mb-5 "><span class="text-gradient d-inline ">Pengumuman Tugas
                        Akhir <br> Universitas Dian Nuswantoro</span></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-2 mb-lg-0">
                <div class="blog_left_sidebar">
                    <article class="blog_item mb-5 mt-5">
                        <div class="blog_details">
                            <table id="example" class="table-striped table-bordered table-responsive-sm">
                                <thead class=" text-black">
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
                                        <?php foreach ($pengumuman as $png): ?>
                                            <tr>
                                                <td>
                                                    <?php echo $png->no; ?>
                                                </td>
                                                <td>
                                                    <a class="text-decoration-none text-black"
                                                        href="<?php echo base_url('dashboard/isi_pengumuman') ?>">
                                                        <?php echo $png->judul; ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <?php echo $png->tanggal; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#example');
</script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>