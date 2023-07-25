<head>
    <title>Jadwal Sidang Tugas Akhir</title>
</head>
<section class="bg-white py-5" style="margin-top: 104px; margin-bottom: 5px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5 mt-4">
                    <h2 class="display-7 fw-bolder"><span class="text-gradient d-inline">Jadwal Sidang Tugas
                            Akhir</span></h2>
                    <h4 class="mb-5">Tahun Ajaran Semester Genap 2023/2024</h4>
                </div>
            </div>
        </div>

        <div class="container">
            <h5>Rencana Sidang TA-1</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Gelombang</th>
                            <th scope="col">Pendaftaran</th>
                            <th scope="col">Estimasi Sidang</th>
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
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="container mt-5">
            <h5>Rencana Sidang TA-2</h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">Gelombang</th>
                            <th scope="col">Pendaftaran</th>
                            <th scope="col">Waktu Sidang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($ta2_jadwal as $jadwal) { ?>
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
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>