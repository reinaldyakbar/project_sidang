<!doctype html>
<html lang="en">
<meta name="Description" content="Website TATIS Udinus" />
<!-- Mendeklarasikan warna yang muncul pada address bar Chrome versi seluler -->
<meta name="theme-color" content="#414f57" />
<!-- Mendeklarasikan ikon untuk iOS -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="default" />
<meta name="apple-mobile-web-app-title" content="TATIS Udinus" />
<link rel="apple-touch-icon" href="path/to/icons/128x128.png" />
<!-- Mendeklarasikan ikon untuk Windows -->
<meta name="msapplication-TileImage" content="path/to/icons/128x128.png" />
<meta name="msapplication-TileColor" content="#000000" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>UDINUS:TATIS1</title>

<head>
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
            self.addEventListener('push', event => {
                const data = event.data.json();
                const options = {
                    body: data.body,
                    icon: '/path/to/icon.png',
                    // Tambahkan opsi lainnya sesuai kebutuhan Anda
                };

                event.waitUntil(
                    self.registration.showNotification(data.title, options)
                );
            });

            self.addEventListener('notificationclick', event => {
                event.notification.close();
                // Tambahkan logika yang sesuai untuk menangani aksi ketika notifikasi diklik
            });


        }
    </script>
    <link rel="manifest" href="/project_sidang/manifest.json">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Press+Start+2P&display=swap"
        rel="stylesheet">
    <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front-end/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front-end/assets/style/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front-end/assets/style/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front-end/assets/style/lightbox.css">
    <!-- DOSBIM -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">



</head>

<body>