<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jadwal Sidang Tugas Akhir 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div id="layoutSidenav_content">
        <div class="container-fluid py-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow">
                        <div class="card-header bg-primary text-white">
                            <h2 class="card-title">Edit Jadwal Sidang Tugas Akhir 1</h2>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo base_url('jadwal/update'); ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
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
                                    <label for="estimasi_sidang" class="form-label">Estimasi Sidang:</label>
                                    <input type="text" name="estimasi_sidang" class="form-control"
                                        value="<?php echo $jadwal['estimasi_sidang']; ?>" required>
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
        </div>
    </div>
</body>

</html>