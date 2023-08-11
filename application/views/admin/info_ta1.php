<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Informasi Tugas Akhir 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
    <div id="layoutSidenav_content">
        <div class="container">
            <h2 class="my-4 text-center">Daftar Informasi Tugas Akhir 1</h2>
            <div class="d-flex justify-content-end mb-3">
                <a href="<?php echo base_url('informasi/input_ta1'); ?>" class="btn btn-success"><i
                        class="bi bi-plus"></i>
                    Tambah Informasi</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Syarat Akademik TA 1</th>
                            <th scope="col">Syarat Admin TA 1</th>
                            <th scope="col">Berkas Reguler</th>
                            <th scope="col">Berkas Publikasi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($info_ta1 as $informasi) { ?>
                            <tr>
                                <td class="text-justify">
                                    <?php echo $informasi['syarat_akademik_ta1']; ?>
                                </td>
                                <td class="text-justify">
                                    <?php echo $informasi['syarat_admin_ta1']; ?>
                                </td>
                                <td class="text-justify">
                                    <?php echo $informasi['berkas_reguler']; ?>
                                </td>
                                <td class="text-justify">
                                    <?php echo $informasi['berkas_publikasi']; ?>
                                </td>
                                <td class="d-flex justify-content-center mt-4">
                                    <a href="<?php echo base_url('informasi/delete/' . $informasi['id']); ?>"
                                        class="btn btn-danger" onclick="return confirmDelete()"><i
                                            class="bi bi-trash"></i></a>
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
            return confirm("Apakah Anda yakin ingin menghapus data ini?");
        }
    </script>
</body>

</html>