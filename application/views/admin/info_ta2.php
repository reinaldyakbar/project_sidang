<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Informasi Tugas Akhir 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div id="layoutSidenav_content">
        <div class="container">
            <h2 class="my-4 text-center">Daftar Informasi Tugas Akhir 2</h2>
            <div class="d-flex justify-content-end mb-3">
                <a href="<?php echo base_url('informasi/input_ta2'); ?>" class="btn btn-success">Tambah Informasi</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Syarat Akademik TA2</th>
                            <th scope="col">Syarat Admin TA2</th>
                            <th scope="col">Berkas TA2 Reguler</th>
                            <th scope="col">Berkas TA2 Publikasi</th>
                            <th scope="col">Pasca Reguler</th>
                            <th scope="col">Pasca Publikasi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($info_ta2 as $informasi) { ?>
                            <tr>
                                <td>
                                    <?php echo $informasi['syarat_akademik_ta2']; ?>
                                </td>
                                <td>
                                    <?php echo $informasi['syarat_admin_ta2']; ?>
                                </td>
                                <td>
                                    <?php echo $informasi['berkas_ta2_reguler']; ?>
                                </td>
                                <td>
                                    <?php echo $informasi['berkas_ta2_publikasi']; ?>
                                </td>
                                <td>
                                    <?php echo $informasi['pasca_reguler']; ?>
                                </td>
                                <td>
                                    <?php echo $informasi['pasca_publikasi']; ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url('informasi/delete_ta2/' . $informasi['id']); ?>"
                                        class="btn btn-danger" onclick="return confirmDelete()">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus informasi ini?");
        }
    </script>
</body>

</html>