<head>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Press+Start+2P&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
</head>
<div id="layoutSidenav_content">
    <section class="bg-white py-2">
        <div class="container">
            <table id="example" class="table table-striped" style="width:100%">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <h2 class="display-7 fw-bolder mb-5 "><span class="d-inline ">Daftar Dosen
                                    Pembimbing</span></h2>
                        </div>
                        <!-- Tombol Tambah Dosen -->
                        <div class="d-flex justify-content-end mb-4">
                            <button class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#tambahDosenModal"><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th>Dosen Pembimbing</th>
                        <th>NPP</th>
                        <th>Bidang kajian</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dosbim as $dsn): ?>
                        <tr>
                            <td>
                                <a href="<?php echo base_url('uploads/' . $dsn->gambar); ?>" data-lightbox="avatar">
                                    <img src="<?php echo base_url('uploads/' . $dsn->gambar); ?>" alt=" Avatar"
                                        style="border-radius: 50%; width: 30px; height: 30px; margin-right: 10px;">
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
                            <td class="text-center">
                                <!-- Tombol Edit -->
                                <a class="btn btn-success btn-sm" href="#" data-bs-toggle="modal"
                                    data-bs-target="#editDosenModal<?php echo $dsn->id; ?>"><i
                                        class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                <!-- Tombol Hapus -->
                                <button class="btn btn-danger btn-sm" onclick="konfirmasiHapus(<?php echo $dsn->id; ?>)">
                                    <i class="fas fa-trash"></i>
                                </button>

                            </td>
                        </tr>
                        <!-- Modal Edit Dosen -->
                        <div class="modal fade" id="editDosenModal<?php echo $dsn->id; ?>" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Dosen</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="editDosenForm" action="<?php echo base_url() . 'admin/update'; ?>"
                                            method="post" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    value="<?php echo $dsn->nama; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="npp" class="form-label">NPP</label>
                                                <input type="text" class="form-control" id="npp" name="npp"
                                                    value="<?php echo $dsn->npp; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="bidang" class="form-label">Bidang Kajian</label>
                                                <input type="text" class="form-control" id="bidang" name="bidang"
                                                    value="<?php echo $dsn->bidang; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="gambar" class="form-label">Gambar</label>
                                                <input type="file" class="form-control" id="gambar" name="gambar"
                                                    value="<?php echo $dsn->gambar; ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal Edit Dosen -->

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</div>

<!-- Modal Tambah Dosen -->
<div class="modal fade" id="tambahDosenModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Dosen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="tambahDosenForm" action="<?php echo base_url('admin/insert'); ?>" method="post"
                    enctype="multipart/form-data">
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
                        <input type="text" class="form-control" id="bidang" name="bidang"
                            placeholder="Masukkan bidang kajian">
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
<!-- Modal Konfirmasi Hapus -->
<div class="modal fade" id="konfirmasiHapusModal<?php echo $dsn->id; ?>" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus Dosen Pembimbing ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a class="btn btn-danger" href="#" onclick="hapusDosen(<?php echo $dsn->id; ?>)">Hapus</a>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    function konfirmasiHapus(dosenId) {
        const modal = new bootstrap.Modal(document.getElementById("konfirmasiHapusModal" + dosenId));
        modal.show();
    }

    function hapusDosen(dosenId) {
        // Lakukan penghapusan di sini, misalnya, arahkan ke endpoint penghapusan
        window.location.href = "<?php echo base_url('admin/delete/') ?>" + dosenId;
    }
</script>