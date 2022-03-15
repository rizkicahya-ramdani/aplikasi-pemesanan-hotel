<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Konfirmasi</title>
  </head>
  <body>

      <!-- Navbar -->
    <header class="p-3 mb-3 border-bottoms shadow sticky-top">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none px-5">
              <img src="<?php base_url() ?>assets/img/crimson-logo.png" width="50" height="50" alt="" class="rounded-circle">
            </a>
    
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="#kamar" class="nav-link px-2 link-light">Kamar</a></li>
              <li><a href="#fasilitas" class="nav-link px-2 link-light">Fasilitas</a></li>
              <li><a href="#overview" class="nav-link px-2 link-light">Overview</a></li>
            </ul>
          </div>
        </div>
      </header>
    

      <div class="container py-2">
        <div class="row">
          <div class="col text-center">
            <h1>Konfirmasi</h1>
            <p>Silahkan screenshot sebagai bukti telah melakukan reservasi</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <table class="table table-bordered">
            <tbody>
              <tr>
                <td><strong>NIK</strong></td>
                <td><?php echo $konfirmasi_booking['nik']; ?></td>
              </tr>
              <tr>
                <td><strong>Kode Booking</strong></td>
                <td><?php echo $konfirmasi_booking['kode_booking']; ?></td>
              </tr>
              <tr>
                <td><strong>Nama Lengkap</strong></td>
                <td><?php echo $konfirmasi_booking['nama_depan']." ".$konfirmasi_booking['nama_belakang'] ?></td>
              </tr>
              <tr>
                <td><strong>Tipe Identitas</strong></td>
                <td><?php echo $konfirmasi_booking['tipe_identitas']; ?></td>
              </tr>
              <tr>
                <td><strong>Nomor Identitas</strong></td>
                <td><?php echo $konfirmasi_booking['nomor_identitas']; ?></td>
              </tr>
              <tr>
                <td><strong>Kewarganegaraan</strong></td>
                <td><?php echo $konfirmasi_booking['kewarganegaraan']; ?></td>
              </tr>
              <tr>
                <td><strong>Alamat</strong></td>
                <td><?php echo $konfirmasi_booking['alamat']; ?></td>
              </tr>
              <tr>
                <td><strong>No HP</strong></td>
                <td><?php echo $konfirmasi_booking['no_hp']; ?></td>
              </tr>
              <tr>
                <td><strong>Email</strong></td>
                <td><?php echo $konfirmasi_booking['email']; ?></td>
              </tr>
              <tr>
                <td><strong>Tanggal In</strong></td>
                <td><?php echo $konfirmasi_booking['tanggal_in']; ?></td>
              </tr>
              <tr>
                <td><strong>Jam In</strong></td>
                <td><?php echo $konfirmasi_booking['jam_in']; ?></td>
              </tr>
              <tr>
                <td><strong>Tanggal Out</strong></td>
                <td><?php echo $konfirmasi_booking['tanggal_out']; ?></td>
              </tr>
              <tr>
                <td><strong>Jam Out</strong></td>
                <td><?php echo $konfirmasi_booking['jam_out']; ?></td>
              </tr>
            </tbody>
          </table>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <a href="<?php echo base_url('') ?>">Kembali</a>
          </div>
        </div>
      </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>