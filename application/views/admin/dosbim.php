<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<div id="layoutSidenav_content">
    <section class="bg-white py-2">
        <div class="container col-md-11 mb-5">
            <table id="example" class="table table-striped" style="width:100%">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <h2 class="display-7 fw-bolder mb-5 "><span class="d-inline ">Daftar Dosen
                                    Pembimbing</span></h2>
                        </div>
                        <!-- Tombol Tambah Dosen -->
                        <div class="d-flex justify-content-end mb-4">
                            <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#tambahDosenModal"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th>Dosen Pembimbing</th>
                        <th>NPP</th>
                        <th>Bidang kajian</th>
                        <th>Kuota Bimbingan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dosbim as $dsn) : ?>
                        <tr>
                            <td>
                                <a href="<?php echo base_url('uploads/' . $dsn->gambar); ?>" data-lightbox="avatar">
                                    <img src="<?php echo base_url('uploads/' . $dsn->gambar); ?>" alt="Avatar" style="border-radius: 50%; width: 30px; height: 30px; margin-right: 10px;">
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
                            <td class="text-center">
                                <a href="<?php echo base_url('admin/edit_dosbim/' . $dsn->id); ?>" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                <a href="<?php echo base_url('admin/delete/' . $dsn->id); ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus dosen ini?')"><i class="fas fa-trash"></i> Hapus</a>
                            </td>
                        </tr>

                        <!-- Modal Tambah Dosen -->
                        <div class="modal fade" id="tambahDosenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Dosen</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="tambahDosenForm" action="<?php echo base_url('admin/insert'); ?>" method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama dosen">
                                            </div>
                                            <div class="mb-3">
                                                <label for="npp" class="form-label">NPP</label>
                                                <input type="text" class="form-control" id="npp" name="npp" placeholder="Masukkan NPP">
                                            </div>
                                            <div class="mb-3">
                                                <label for="bidang" class="form-label">Bidang Kajian</label>
                                                <input type="text" class="form-control" id="bidang" name="bidang" placeholder="Masukkan bidang kajian">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kuota" class="form-label">Kuota Bimbingan</label>
                                                <input type="text" class="form-control" id="kuota" name="kuota" placeholder="Masukkan kuota">
                                            </div>
                                            <div class="mb-3">
                                                <label for="gambar" class="form-label">Gambar</label>
                                                <input type="file" class="form-control" id="gambar" name="gambar">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>





<!-- Load jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<!-- Load DataTables -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<!-- Load AOS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<!-- Initialize AOS -->
<script>
    AOS.init();
</script>