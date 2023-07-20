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
                    <button class="accordion-button bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Pola dan Bentuk Tugas Akhir
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <li>Tugas Akhir Reguler
                                <p>Dapat ditempuh dengan bermacam bentuk seperti:</p>
                                <ul>
                                    <li>Kajian Ilmiah</li>
                                    <li>Kajian Prototipe</li>
                                    <li>Perancangan Perangkat Informatika</li>
                                    <li>Pengembangan Perangkat Informatika</li>
                                </ul>
                            </li>
                            <li>Kuliah Kerja Industri (KKI)</li>
                            <li>Publikasi Jurnal Internasional Bereputasi (Terindeks Scopus minim Q3) atau dengan Konferensi Internasional (terindex Scopus)</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Syarat Administrasi Tugas Akhir 2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <li>Mahasiswa tersebut terdaftar sebagai mahasiswa aktif</li>
                            <li>Mahasiswa tersebut sudah menginput KRS Tugas Akhir 2</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Syarat Akademik Tugas Akhir 2
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <li>Mahasiswa sudah menyelesaikan kuliah minimal 130 SKS</li>
                            <li>Dalam daftar KHS tidak boleh ada nilai E</li>
                            <li>IPK minimal 2.00</li>
                            <li>Jumlah nilai D maksimal 10% dari jumlah mata kuliah yang telah diambil atau 4 mata kuliah</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button bg-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        Syarat Sidang Tugas Akhir 2
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ol>
                            <li>Mahasiswa harus lulus mata kuliah Tugas Akhir 1 minimal dengan nilai C</li>
                            <li>Bimbingan minimal TA 2 8 kali</li>
                            <li>Menyerahkan dokumen laporan tugas akhir, sebanyak 4 eksemplar</li>
                            <li>Tidak boleh ada nilai E</li>
                            <li>IPK minimal 2.00</li>
                            <li>Telah menyelesaikan kuliah minimal 140 SKS</li>
                            <li>Jumlah nilai D maksimal 5% dari jumlah mata kuliah yang telah diambil atau 2 mata kuliah</li>
                            <li>Skor TOEFL minimal 400</li>
                            <li>Bebas beban administratif</li>
                            <li>Sertifikat seminar nasional dan workshop masing-masing 1 buah</li>
                            <li>Turnitin max 25%</li>
                            <li>Pakaian yang digunakan saat Sidang TA 2, menggunakan baju putih berkerah,dasi,celana hitam, dan sepatu hitam serta jas almameter</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
<section class="bg-white py-5" style="margin-top: 8px; margin-bottom: 104px;">
    <div class="container px-5 ">
        <div class="row d-flex justify-content-center">
            <button class="btn-2" style="width: 250px; height: 50px;">
                <span>Unduh Panduan</span><i></i>
            </button>
        </div>
    </div>
</section>
<script>
    // Dapatkan semua tombol accordion
    const accordionButtons = document.querySelectorAll('[data-bs-toggle="collapse"]');

    // Loop melalui setiap tombol accordion dan tambahkan event listener
    accordionButtons.forEach(button => {
        button.addEventListener('click', function() {
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