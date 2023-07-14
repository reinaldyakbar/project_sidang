<!-- Footer-->
<footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img class="img-f" src="<?php echo base_url() ?>assets/front-end/assets/images/lgo.png" alt="...">
            </div>
            <div class="col-md-7 mt-sm-3">
                <h3 class=" txt-footer">Kontak</h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-7 mt-sm-3">
                                <ul class="list-unstyled txt-footer">
                                    <li><a href="mailto:defri.kurniawan@dsn.ac.id"
                                            class="text-white text-decoration-none"><i class="bi bi-envelope"></i>&nbsp
                                            defri.kurniawan@dsn.ac.id</a>
                                    </li>
                                    <li><i class="bi bi-phone"></i> +6282225701985 </li>
                                </ul>
                            </div>
                            <div class="col-md-5 col-foot">
                                <ul class="list-unstyled txt-footer">
                                    <li><a href="mailto:danang.wu@dsn.ac.id" class="text-white text-decoration-none"><i
                                                class="bi bi-envelope"></i>&nbsp danang.wu@dsn.ac.id</li>
                                    <a><i class="bi bi-phone"></i> +6285740955623</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="list-unstyled txt-footer">
                            <li><i class="bi bi-geo-alt" style="text-align: justify;"></i> Gedung H Lt. 2 Kampus
                                Udinus <br>Jl. Imam Bonjol No.207 Pendrikan Kidul,<br> Kec. Semarang Tengah Kota
                                Semarang,<br> Jawa Tengah 50131</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="<?php echo base_url() ?>assets/front-end/assets/js/bootstrap.min.js"></script>
<!-- NAV-LINK ACTIVE -->
<script>
    // Ambil semua elemen dengan kelas 'nav-link'
    var navLinks = document.getElementsByClassName('nav-link');

    // Loop melalui semua elemen dan tambahkan event listener
    for (var i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener('click', function () {
            // Hapus kelas 'active' dari semua elemen
            for (var j = 0; j < navLinks.length; j++) {
                navLinks[j].classList.remove('active');
            }

            // Tambahkan kelas 'active' ke elemen yang diklik
            this.classList.add('active');
        });
    }
</script>
</body>

</html>