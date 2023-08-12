<section class="bg-white py-5" style="margin-top: 104px; margin-bottom: 8px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="text-center mb-5 mt-4">
                <h2 class="display-7 fw-bolder mb-5 "><span class="text-gradient d-inline ">Daftar Dosen
                        Pembimbing</span></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Dosen Pembimbing</th>
                    <th>NPP</th>
                    <th>Bidang kajian</th>
                    <th>Kuota Bimbingan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dosbim as $dsn) : ?>
                    <tr>
                        <td>
                            <a href="<?php echo base_url('uploads/' . $dsn->gambar); ?>" data-lightbox="avatar">
                                <img src="<?php echo base_url('uploads/' . $dsn->gambar); ?>" alt=" Avatar" style="border-radius: 50%; width: 30px; height: 30px; margin-right: 10px;">
                            </a>
                            <span>
                                <?php echo $dsn->nama; ?>
                            </span>
                        </td>
                        <td>
                            <?php echo $dsn->npp; ?>
                        </td>
                        <td>
                            <?php echo $dsn->bidang; ?>
                        </td>
                        <td>
                            <?php echo $dsn->kuota; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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