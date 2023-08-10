<head>
    <title>Jadwal Sidang Tugas Akhir</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Press+Start+2P&display=swap"
        rel="stylesheet">
    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front-end/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front-end/assets/style/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front-end/assets/style/responsive.css">
</head>

<div id="layoutSidenav_content">
    <section class="bg-white py-2" style="margin-top: 0px; margin-bottom: 8px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5 mt-4">
                        <h2 class="display-7 fw-bolder mb-5"><span class="d-inline">Jadwal Sidang Tugas
                                Akhir</span></h2>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Rencana Sidang TA-1</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#tambahModalTA1">
                        <i class="fas fa-plus"></i>
                    </button>
                </div> <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Gelombang</th>
                                <th scope="col">Pendaftaran</th>
                                <th scope="col">Estimasi Sidang</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ta1_jadwal as $jadwal) { ?>
                                <tr>
                                    <td>
                                        <?php echo $jadwal['gelombang']; ?>
                                    </td>
                                    <td>
                                        <?php echo $jadwal['pendaftaran']; ?>
                                    </td>
                                    <td>
                                        <?php echo $jadwal['estimasi_sidang']; ?>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-warning"
                                            onclick="editJadwal(<?php echo $jadwal['id']; ?>)"><i
                                                class="fas fa-edit"></i></a>

                                        <a href="<?php echo base_url('jadwal/delete/' . $jadwal['id']); ?>"
                                            class="btn btn-danger" onclick="return confirmDelete()"><i
                                                class="fas fa-trash"></i></a>

                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Rencana Sidang TA-2</h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#tambahModalTA2">
                        <i class="fas fa-plus"></i>
                    </button>
                </div> <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th scope="col">Gelombang</th>
                                <th scope="col">Pendaftaran</th>
                                <th scope="col">Waktu Sidang</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ta2_jadwal as $jadwal): ?>
                                <tr>
                                    <td>
                                        <?php echo $jadwal['gelombang']; ?>
                                    </td>
                                    <td>
                                        <?php echo $jadwal['pendaftaran']; ?>
                                    </td>
                                    <td>
                                        <?php echo $jadwal['waktu_sidang']; ?><br>
                                        <?php echo $jadwal['keterangan']; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('jadwal/edit_ta2/' . $jadwal['id']); ?>"
                                            class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                        <a href="<?php echo base_url('jadwal/delete_ta2/' . $jadwal['id']); ?>"
                                            class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i
                                                class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Modal Tambah TA1-->
<div class="modal fade" id="tambahModalTA1" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Jadwal Sidang Tugas Akhir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url('jadwal/insert/'); ?>" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="gelombang" class="form-label">Gelombang:</label>
                        <input type="text" name="gelombang" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="pendaftaran" class="form-label">Pendaftaran:</label>
                        <input type="text" name="pendaftaran" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="estimasi_sidang" class="form-label">Estimasi Sidang:</label>
                        <input type="text" name="estimasi_sidang" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Tambah TA2-->
<div class="modal fade" id="tambahModalTA2" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Jadwal Sidang Tugas Akhir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo base_url('jadwal/insert_ta2/'); ?>" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="gelombang" class="form-label">Gelombang:</label>
                        <input type="text" name="gelombang" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="pendaftaran" class="form-label">Pendaftaran:</label>
                        <input type="text" name="pendaftaran" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="waktu_sidang" class="form-label">Waktu Sidang:</label>
                        <input name="waktu_sidang" class="form-control" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan:</label>
                        <textarea name="keterangan" class="form-control" rows="3" required></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- Modal Edit dan Hapus -->
<script>
    function editJadwal(id) {
        window.location.href = "<?php echo base_url('jadwal/edit/'); ?>" + id;
    }
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus data ini?");
    }

</script>
<script>
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'alert alert-success fixed-top';
        notification.role = 'alert';
        notification.textContent = message;

        document.body.appendChild(notification);

        setTimeout(function () {
            document.body.removeChild(notification);
        }, 3000); // Notifikasi akan hilang setelah 3 detik
    }
</script>