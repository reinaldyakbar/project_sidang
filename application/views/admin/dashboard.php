<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- FullCalendar CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">
  <!-- Custom CSS -->
</head>
<div id="layoutSidenav_content">
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4 mx-auto my-auto">
        <div class="card bg-info">
          <div class="card-body text-center">
            <h5 class="card-title">Jumlah Dosen Pembimbing</h5>
            <p class="card-text"><strong>500</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 mb-2 mb-lg-0 mt-5s">
    <div class="blog_left_sidebar">
      <article class="blog_item mb-5">
        <div class="blog_details">
          <table id="example" class="table-striped table-bordered table-responsive-sm">
            <thead class="text-black">
              <tr>
                <th class="text-center" width='3%'>
                  No
                </th>
                <th class="text-center" width='80%'>
                  Judul
                </th>
                <th class="text-center" width='17%'>
                  Tanggal
                </th>
              </tr>
            </thead>
            <tbody>
              <?php if (isset($pengumuman) && is_array($pengumuman)): ?>
                <?php foreach ($pengumuman as $index => $png): ?>
                  <tr>
                    <td>
                      <?php echo $png->id; ?>
                    </td>
                    <td>
                      <a class="text-decoration-none" href="<?php echo base_url('pengumuman/isi_pengumuman/' . $index); ?>">
                        <?php echo $png->judul; ?>
                      </a>
                    </td>
                    <td>
                      <?php
                      // Ubah format tanggal dari database ke format "tanggal, bulan tahun"
                      echo date('d F Y', strtotime($png->tanggal));
                      ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
        <div class="container text-center">
          <img src="<?php echo base_url() ?>assets/img/logo.png" alt="Logo" style="max-width: 200px;">
        </div>
      </article>
    </div>
  </div>
</div>


<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function () {
    $('#example').DataTable();
  });
</script>