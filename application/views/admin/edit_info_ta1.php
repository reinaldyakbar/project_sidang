<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Informasi Tugas Akhir 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
    <div id="layoutSidenav_content">
        <div class="container">
            <h2>Edit Informasi Tugas Akhir 1</h2>
            <form action="<?php echo base_url('informasi/edit/' . $informasi['id']); ?>" method="post">

                <div class="mb-3">
                    <label for="syarat_akademik_ta1" class="form-label">Syarat Akademik Tugas Akhir 1:</label>
                    <textarea id="syarat_akademik_ta1" name="syarat_akademik_ta1" class="form-control"
                        rows="4"><?php echo $informasi['syarat_akademik_ta1']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="syarat_admin_ta1" class="form-label">Syarat Administrasi Tugas Akhir 1:</label>
                    <textarea id="syarat_admin_ta1" name="syarat_admin_ta1" class="form-control"
                        rows="4"><?php echo $informasi['syarat_admin_ta1']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="berkas_reguler" class="form-label">Berkas Pendaftaran Sidang TA 1 Jalur Reguler:</label>
                    <textarea id="berkas_reguler" name="berkas_reguler" class="form-control"
                        rows="4"><?php echo $informasi['berkas_reguler']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="berkas_publikasi" class="form-label">Berkas Pendaftaran Sidang TA 1 Jalur
                        Publikasi:</label>
                    <textarea id="berkas_publikasi" name="berkas_publikasi" class="form-control"
                        rows="4"><?php echo $informasi['berkas_publikasi']; ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>