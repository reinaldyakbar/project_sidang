<section class="bg-white py-5" style="margin-top: 104px; margin-bottom: 8px;">
    <div class="container px-5 ">
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="text-center mb-5 mt-4">
                    <h2 class="display-7 fw-bolder mb-5 "><span class="text-gradient d-inline ">Informasi Tugas
                            Akhir 1</span></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-6 mx-4"
            style="width: 500px; height: 350px; border-radius: 25px; box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);">
            <div class="text-center mt-5 mb-5">
                <h5 class="display-7 fw-bolder mb-3 "><span class=" d-inline ">Syarat Akademik Tugas Akhir 1</span></h5>
            </div>
            <div class="row">
                <div class="col-lg-12 px-5">
                    <ol>
                        <?php foreach ($info_ta1 as $info): ?>
                            <li>
                                <?php echo $info['syarat_akademik_ta1']; ?>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mx-4"
            style="width: 500px; height: 350px; border-radius: 25px; box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);">
            <div class="text-center mt-5 mb-5">
                <h5 class="display-7 fw-bolder mb-3 "><span class=" d-inline ">Syarat Administrasi Tugas Akhir 1</span>
                </h5>
            </div>
            <div class="row">
                <div class="col-lg-12 px-5">
                    <ol>
                        <?php foreach ($info_ta1 as $info): ?>
                            <li>
                                <?php echo $info['syarat_admin_ta1']; ?>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <div class="accordion" id="accordionExample" style="width: 1050px;">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Berkas Pendaftaran Sidang TA 1 Jalur Reguler
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <?php foreach ($info_ta1 as $info): ?>
                                <li>
                                    <?php echo $info['berkas_reguler']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Berkas Pendaftaran Sidang TA 1 Jalur Publikasi
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <?php foreach ($info_ta1 as $info): ?>
                                <li>
                                    <?php echo $info['berkas_publikasi']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="bg-white py-5" style="margin-top: 8px; margin-bottom: 104px;">
    <div class="container px-5">
        <div class="row d-flex justify-content-center">
            <!-- Tombol unduh PDF -->
            <button class="btn-2" style="width: 250px; height: 50px;" onclick="unduhPDF()">
                <span>Unduh Panduan</span><i></i>
            </button>
        </div>
    </div>
</section>

<script>
    function unduhPDF() {
        // Ganti 'nama_file.pdf' dengan alamat lengkap dan benar dari file PDF yang ingin diunduh
        var fileURL = 'uploads/buku_ta_2019.pdf';

        // Membuat elemen anchor
        var a = document.createElement('a');

        // Memberikan atribut href untuk menunjuk ke file PDF
        a.href = fileURL;

        // Menetapkan atribut download dengan nama file yang diinginkan oleh pengguna
        a.download = 'buku_ta_2019.pdf';

        // Menambahkan elemen anchor ke body dokumen
        document.body.appendChild(a);

        // Menginisiasi klik pada elemen anchor untuk memulai proses pengunduhan
        a.click();

        // Menghapus elemen anchor dari body dokumen (opsional, tetapi bisa berguna untuk tampilan)
        document.body.removeChild(a);
    }
</script>