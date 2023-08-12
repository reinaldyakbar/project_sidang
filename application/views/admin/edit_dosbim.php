<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dosen Pembimbing</title>

    <!-- Load Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Load DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div id="layoutSidenav_content">
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Edit Dosen Pembimbing</h2>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('admin/update_dosen'); ?>
                    <input type="hidden" name="id" value="<?php echo $dosen->id; ?>">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dosen->nama; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="npp" class="form-label">NPP</label>
                        <input type="text" class="form-control" id="npp" name="npp" value="<?php echo $dosen->npp; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="bidang" class="form-label">Bidang Kajian</label>
                        <input type="text" class="form-control" id="bidang" name="bidang" value="<?php echo $dosen->bidang; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kuota" class="form-label">Kuota Bimbingan</label>
                        <input type="text" class="form-control" id="kuota" name="kuota" value="<?php echo $dosen->kuota; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Load jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <!-- Load Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <!-- Load DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
</body>

</html>