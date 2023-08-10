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
            <h2>Daftar Informasi Tugas Akhir 1</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Syarat Akademik TA 1</th>
                            <th scope="col">Syarat Admin TA 1</th>
                            <th scope="col">Berkas Reguler</th>
                            <th scope="col">Berkas Publikasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($info_ta1 as $informasi) { ?>
                            <tr>
                                <td>
                                    <?php echo $informasi['id']; ?>
                                </td>
                                <td>
                                    <?php echo $informasi['syarat_akademik_ta1']; ?>
                                </td>
                                <td>
                                    <?php echo $informasi['syarat_admin_ta1']; ?>
                                </td>
                                <td>
                                    <?php echo $informasi['berkas_reguler']; ?>
                                </td>
                                <td>
                                    <?php echo $informasi['berkas_publikasi']; ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>