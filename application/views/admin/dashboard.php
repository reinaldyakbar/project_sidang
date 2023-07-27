<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Press+Start+2P&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
</head>

<body>
  <div id="layoutSidenav_content">
    <section class="bg-white py-2">
      <div class="container col-md-10 mt-4">
        <div class="row">
          <div class="col-lg-12 mb-2 mb-lg-0 mt-5s">
            <table id="example" class="table table-striped" style="width:100%">
              <div class="row">
                <div class="col-lg-12">
                  <div class="text-center mb-5">
                    <h4 class="display-7 fw-bolder mb-5 "><span class="d-inline ">Informasi Jumlah Dosen
                        Pembimbing</span></h4>
                  </div>
                </div>
              </div>
              <thead>
                <tr>
                  <th>Dosen Pembimbing</th>
                  <th>NPP</th>
                  <th>Bidang kajian</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($dosbim as $dsn): ?>
                  <tr>
                    <td>
                      <a href="<?php echo base_url('uploads/' . $dsn->gambar); ?>" data-lightbox="avatar">
                        <img src="<?php echo base_url('uploads/' . $dsn->gambar); ?>" alt=" Avatar"
                          style="border-radius: 50%; width: 30px; height: 30px; margin-right: 10px;">
                      </a>
                      <span>
                        <?php echo $dsn->nama; ?>
                      </span>
                    </td>
                    <td>
                      <?php echo $dsn->npp; ?>
                    </td>
                    <td>
                      <?php echo $dsn->bidang; ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <div class="container col-md-10 mt-5">
      <div class="blog_left_sidebar">
        <article class="blog_item mb-5">
          <div class="blog_details">
            <table id="pengumumanTable" class="table-striped table-bordered table-responsive-sm">
              <thead class="text-black">
                <tr>
                  <th class="text-center" width='3%'>No</th>
                  <th class="text-center" width='80%'>Judul</th>
                  <th class="text-center" width='17%'>Tanggal</th>
                </tr>
                <div class="text-center mb-5">
                  <h4 class="display-7 fw-bolder"><span class="d-inline ">Pengumuman Tugas Akhir Universitas Dian
                      Nuswantoro</span></h4>
                </div>
              </thead>
              <tbody>
                <?php if (isset($pengumuman) && is_array($pengumuman)): ?>
                  <?php foreach ($pengumuman as $index => $png): ?>
                    <tr>
                      <td>
                        <?php echo $png->id; ?>
                      </td>
                      <td>
                        <a class="text-decoration-none"
                          href="<?php echo base_url('pengumuman/isi_pengumuman/' . $index); ?>">
                          <?php echo $png->judul; ?>
                        </a>
                      </td>
                      <td>
                        <?php echo date('d F Y', strtotime($png->tanggal)); ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </article>
        <div class="container text-center" style="margin-top: 115px;">
          <img src="<?php echo base_url() ?>assets/img/logo.png" alt="Logo" style="max-width: 200px;">
        </div>
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- Custom Script -->
    <script>
      $(document).ready(function () {
        $('#example').DataTable();
        $('#pengumumanTable').DataTable();
      });

      function konfirmasiHapus(dosenId) {
        const modal = new bootstrap.Modal(document.getElementById("konfirmasiHapusModal" + dosenId));
        modal.show();
      }

      function hapusDosen(dosenId) {
        // Lakukan penghapusan di sini, misalnya, arahkan ke endpoint penghapusan
        window.location.href = "<?php echo base_url('admin/delete/') ?>" + dosenId;
      }
    </script>
</body>

</html>