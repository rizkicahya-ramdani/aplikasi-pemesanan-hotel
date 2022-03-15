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

        <!-- Toastr -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">

        <title>Hotel Crimson</title>
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

          

          
          <div class="box py-2">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-8">
                  <div class="alert alert-primary" role="alert">
                    Masukkan Data Diri anda terlebih dahulu
                  </div>
                  
                  <form method="post" action="<?php echo base_url('tamu/simpan') ?>">
                    <div class="mb-3">
                      <label for="nik" class="form-label">NIK</label>
                      <input type="text" class="form-control" name="nik" required>
                    </div>
                    <div class="mb-3">
                      <label for="nama_depan" class="form-label">Nama Depan</label>
                      <input type="text" class="form-control" name="nama_depan" required>
                    </div>
                    <div class="mb-3">
                      <label for="nama_belakang" class="form-label">Nama Belakang</label>
                      <input type="text" class="form-control" name="nama_belakang" required>
                    </div>
                    <div class="mb-3">
                      <label for="tipe_identitas" class="form-label">Tipe Identitas</label>
                      <select class="form-control" style="width: 100%;" name="tipe_identitas" required>
                        <option selected="selected">- Pilih -</option>
                        <option value="KTP">KTP</option>
                        <option value="SIM">SIM</option>
                        <option value="Passport">Passport</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
                      <input type="text" class="form-control" name="nomor_identitas" required>
                    </div>
                    <div class="mb-3">
                      <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                      <select class="form-control" style="width: 100%;" name="kewarganegaraan" required>
                        <option selected="selected">- Pilih -</option>
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="alamat" class="form-label">Alamat</label>
                      <input type="text" class="form-control" name="alamat" required>
                    </div>
                    <div class="mb-3">
                      <label for="no_hp" class="form-label">No HP</label>
                      <input type="text" class="form-control" name="no_hp" required>
                    </div>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                      <label for="tanggal_in" class="form-label">Tanggal In</label>
                      <input type="date" class="form-control" name="tanggal_in" required>
                    </div>
                    <div class="mb-3">
                      <label for="jam_in" class="form-label">Jam In</label>
                      <input type="time" class="form-control" name="jam_in" required>
                    </div>
                    <div class="mb-3">
                      <label for="tanggal_out" class="form-label">Tanggal Out</label>
                      <input type="date" class="form-control" name="tanggal_out" required>
                    </div>
                    <div class="mb-3">
                      <label for="jam_out" class="form-label">Jam Out</label>
                      <input type="time" class="form-control" name="jam_out" required>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
          

         
          <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
          <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
          <script>
            AOS.init();
          </script>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>