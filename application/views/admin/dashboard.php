<!DOCTYPE html>
<html>

<head>
  <title>Halaman Statistik</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    /* Custom CSS */
    .image-container {
      position: relative;
      text-align: center;
      margin-top: 50px;
      /* Adjust the value as needed for the space between the image and cards */
    }

    .image {
      width: 250px;
      display: block;
      margin: 0 auto;
    }
  </style>
</head>

<body>
  <div id="layoutSidenav_content">
    <div class="container mt-4">
      <!-- Notification Alert -->
      <div class="row">
        <div class="col-md-12">
          <?php if ($this->session->userdata('username')) { ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="notification">
              Selamat datang, <span id="username">
                <?php echo $this->session->userdata('username') ?>
              </span> di web tatis udinus
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="row">
        <header class="bg-primary text-white text-center py-4 col-md-12">
          <h1>Selamat Datang di Website Admin</h1>
          <p>Web Media Informasi Tugas Akhir</p>
        </header>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="card mt-5">
            <div class="card-body">
              <h5 class="card-title">Jumlah Dosen</h5>
              <p class="card-text">Total Dosen:
                <?php echo $totalDosen; ?>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mt-5">
            <div class="card-body">
              <h5 class="card-title">Jumlah Pengumuman</h5>
              <p class="card-text">Total Pengumuman:
                <?php echo $totalPengumuman; ?>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 text-center">
          <div class="image-container">
            <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="Logo" class="image">
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    // Close the alert when the close button is clicked
    $('.alert .close').on('click', function () {
      $(this).parent().remove();
    });
  </script>
</body>

</html>