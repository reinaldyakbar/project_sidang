</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/assets/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url() ?>assets/assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>assets/js/datatables-simple-demo.js"></script>
<script src="<?php echo base_url() ?>assets/front-end/assets/style/lightbox.js"></script>
<script>
    // Inisialisasi Lightbox
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    });
</script>
<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker
                .register('/project_sidang/serviceworker.js')
                .then(registration => {
                    console.log('Service Worker registered:', registration);
                })
                .catch(error => {
                    console.error('Service Worker registration failed:', error);
                });
        });
    }
</script>

</html>