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
                                    <li><a href="mailto:defri.kurniawan@dsn.ac.id" class="text-white text-decoration-none"><i class="bi bi-envelope"></i>&nbsp
                                            defri.kurniawan@dsn.ac.id</a>
                                    </li>
                                    <li><i class="bi bi-phone"></i> +6282225701985 </li>
                                </ul>
                            </div>
                            <div class="col-md-5 col-foot mt-sm-3">
                                <ul class="list-unstyled txt-footer">
                                    <li><a href="mailto:danang.wu@dsn.ac.id" class="text-white text-decoration-none"><i class="bi bi-envelope"></i>&nbsp danang.wu@dsn.ac.id</li>
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
<a href="#" class="back-to-top bi bi-caret-up-fill"></a>
<script src="<?php echo base_url() ?>assets/front-end/assets/style/js.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="<?php echo base_url() ?>assets/front-end/assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/front-end/assets/style/lightbox.js"></script>
<script>
    // Inisialisasi Lightbox
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'fitImagesInViewport': true
    });
</script>
<script>
    if ('Notification' in window && 'serviceWorker' in navigator) {
        // Cek apakah Notifikasi didukung dan service worker tersedia di browser
        Notification.requestPermission(status => {
            console.log('Notifikasi izin status:', status);
        });
    }
</script>
</body>

</html>