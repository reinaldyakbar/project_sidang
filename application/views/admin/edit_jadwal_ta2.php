<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal Sidang Tugas Akhir 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>
    <div id="layoutSidenav_content">
        <div class="container mt-5">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h2 class="card-title">Edit Jadwal Sidang Tugas Akhir 2</h2>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('jadwal/update_ta2'); ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $jadwal['id']; ?>">
                        <div class="mb-3">
                            <label for="gelombang" class="form-label">Gelombang:</label>
                            <input type="text" name="gelombang" class="form-control"
                                value="<?php echo $jadwal['gelombang']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="pendaftaran" class="form-label">Pendaftaran:</label>
                            <input type="text" name="pendaftaran" class="form-control"
                                value="<?php echo $jadwal['pendaftaran']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="waktu_sidang" class="form-label">Waktu Sidang:</label>
                            <input type="text" name="waktu_sidang" class="form-control"
                                value="<?php echo $jadwal['waktu_sidang']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan:</label>
                            <textarea name="keterangan" class="form-control" rows="3"
                                required><?php echo $jadwal['keterangan']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-check"></i> Simpan
                            Perubahan</button>
                        <a href="<?php echo base_url('jadwal/index'); ?>" class="btn btn-secondary"><i
                                class="bi bi-arrow-left"></i> Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>