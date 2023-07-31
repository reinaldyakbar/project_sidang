<section class="bg-white py-5" style="margin-top: 104px; margin-bottom: 8px;">
    <div class="container px-5 ">
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="text-center mb-5 mt-4">
                    <h2 class="display-7 fw-bolder mb-5 "><span class="text-gradient d-inline ">Informasi Tugas
                            Akhir 2</span></h2>
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
                        Syarat Akademik Tugas Akhir 2
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <?php foreach ($info_ta2 as $info): ?>
                                <li>
                                    <?php echo $info['syarat_akademik_ta2']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button bg-white collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Syarat Administrasi Tugas Akhir 2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <?php foreach ($info_ta2 as $info): ?>
                                <li>
                                    <?php echo $info['syarat_admin_ta2']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button bg-white collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Berkas Pendaftaran Sidang TA 2 Jalur Reguler
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <?php foreach ($info_ta2 as $info): ?>
                                <li>
                                    <?php echo $info['berkas_ta2_reguler']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button bg-white collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Berkas Pendaftaran Sidang TA 2 Jalur Publikasi
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <?php foreach ($info_ta2 as $info): ?>
                                <li>
                                    <?php echo $info['berkas_ta2_publikasi']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button bg-white collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Pasca Pelaksanaan Sidang TA 2 Reguler
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <?php foreach ($info_ta2 as $info): ?>
                                <li>
                                    <?php echo $info['pasca_reguler']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button bg-white collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Pasca Pelaksanaan Sidang TA 2 Publikasi
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <?php foreach ($info_ta2 as $info): ?>
                                <li>
                                    <?php echo $info['pasca_publikasi']; ?>
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
<script>
    // Dapatkan semua tombol accordion
    const accordionButtons = document.querySelectorAll('[data-bs-toggle="collapse"]');

    // Loop melalui setiap tombol accordion dan tambahkan event listener
    accordionButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Dapatkan target collapse yang terkait dengan tombol ini
            const targetId = this.getAttribute('data-bs-target');
            const targetCollapse = document.querySelector(targetId);

            // Dapatkan semua collapse yang ada di dalam parent accordion
            const allCollapses = document.querySelectorAll('.accordion-collapse');

            // Loop melalui setiap collapse dan sembunyikan jika bukan collapse yang sedang ditampilkan
            allCollapses.forEach(collapse => {
                if (collapse !== targetCollapse) {
                    collapse.classList.remove('show');
                }
            });

            // Toggle class "show" pada collapse untuk mengontrol tampilan
            targetCollapse.classList.toggle('show');
        });
    });
</script>