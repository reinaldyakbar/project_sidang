<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>
    .card-info {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 15px;
        transition: background-position 0.8s;
        /* Transisi animasi warna ke kanan selama 0.8 detik */
    }

    .card-info table {
        width: 100%;
        border-collapse: collapse;
    }

    .card-info th,
    .card-info td {
        border: 2px solid black;
        padding: 8px;
    }

    .btn-edit,
    .btn-delete,
    .btn-add {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 8px 12px;
        border: none;
        border-radius: 4px;
        color: #fff;
        font-size: 14px;
        text-decoration: none;
        transition: background-color 0.3s;
        margin-right: 6px;
        cursor: pointer;
    }

    .btn-edit {
        background-color: #007bff;
    }

    .btn-delete {
        background-color: #dc3545;
    }

    .btn-add {
        background-color: #28a745;
    }

    .btn-edit:hover,
    .btn-delete:hover,
    .btn-add:hover {
        opacity: 0.85;
    }

    /* Efek warna ketika kursor diarahkan ke tombol */
    .btn-edit:hover {
        background-color: #0056b3;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    .btn-add:hover {
        background-color: #218838;
    }

    .btn-icon {
        margin-right: 6px;
    }
</style>

<div id="layoutSidenav_content">
    <div class="container my-5">
        <div class="text-center mb-3 mt-1">
            <h2 class="display-7 fw-bolder mb-5">Pengumuman Tugas Akhir Universitas Dian Nuswantoro</h2>
        </div>
        <div class="d-flex justify-content-end mb-3">
            <!-- Add Announcement Button -->
            <a href="<?php echo base_url('pengumuman/tambah_pengumuman') ?>" class="btn btn-add">
                <i class="fas fa-plus btn-icon"></i> Tambah Pengumuman
            </a>
        </div>
        <?php
        $pengumuman_array = json_decode(json_encode($pengumuman), true);
        ?>
        <div class="card-info px-3 py-3 mb-3 text-center">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Koordinator TA</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no_urut = 1; ?>
                    <?php foreach ($pengumuman_array as $png) { ?>
                        <tr>
                            <td>
                                <?php echo $no_urut; ?>
                            </td>
                            <td>
                                <?php echo $png['judul']; ?>
                            </td>
                            <td>
                                <?php
                                $formatted_date = date('j F Y', strtotime(str_replace(array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $png['tanggal'])));
                                echo $formatted_date;
                                ?>
                            </td>
                            <td>
                                <?php echo $png['koordinator']; ?>
                            </td>
                            <td>
                                <!-- Delete Button -->
                                <a href="<?php echo base_url('pengumuman/delete_pengumuman') ?>" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php $no_urut++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>