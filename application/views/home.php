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

          
    
          <!-- Heroes -->
          <div class="heroes container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
              <div class="col-10 col-sm-8 col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <img src="<?php echo base_url() ?>assets/img/heroes-image.jpg" class="d-block mx-lg-auto img-fluid heroes-img shadow" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
              </div>
              <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="display-5 fw-bold lh-1 mb-3"><strong>Selamat Datang di Hotel Crimson</strong></h1>
                <p class="lead">Hotel Crimson merupakan hotel terbaik di Yogyakarta, beralamatkan di Jalan Nusa Indah No 28. Kami menyediakan berbagai macam kamar dan fasilitas-fasilitas lengkap</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                  <button type="button" class="btn-custom px-4 me-md-2" data-bs-toggle="modal" data-bs-target="#infoHotel">Lihat Selengkapnya</button>

                  <div class="modal fade" id="infoHotel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Info Hotel Crimson</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <img src="<?php echo base_url() ?>assets/img/info-hotel.jpg" class="mb-3" alt="">
                          Hotel mewah yang dikelilingi pertokoan dan restoran ini berjarak 2,9 km dari Toko Baju yang ramai.
                          Kamar mewah yang modern menawarkan Wi-Fi gratis, TV layar datar, bar mini, serta alat pembuat teh dan kopi. Kamar di kelas yang lebih tinggi memiliki balkon. Kamar studio dan suite dengan 1-2 kamar tidur memiliki ruang keluarga dan/atau bak mandi whirlpool. Kamar suite di kelas yang lebih tinggi menawarkan dapur kecil, powder room, dan jasa pelayan pribadi 24 jam.
                          Sarapan prasmanan dan parkir gratis. Fasilitas lainnya meliputi 2 restoran kelas atas dan lounge mewah, serta kolam renang outdoor dengan bar di tepi kolam renang. Spa, pusat kebugaran, dan butik juga tersedia.
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Keluar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

         

          <!-- Album -->
          <div class="album py-5 bg-light" id="kamar">
            <div class="container">
              <div class="row">
                <h1 class="text-center mb-3"><strong>Kamar</strong></h1>
              </div>
              <div class="row">
                <?php foreach ($data_tipe_kamar as $value) { ?>
                  <div class="col-md-6">
                  <div class="card shadow-sm">
                    <img src="<?php echo base_url().$value['gambar'] ?>" class="card-img-top img-custom" height="500" alt="">
                    <div class="card-body">
                      <h2 class="card-text"><?php echo $value['nama_kamar_tipe'] ?></h2>
                      <p class="card-text"><?php echo $value['fasilitas'] ?></p>
                                          
                    </div>
                    <div class="card-footer">
                      <a href="<?php echo base_url('datadiri') ?>" class="btn btn-outline-primary">Pesan</a>
                    </div>
                  </div>
                </div>
                <?php } ?>


              </div>
            </div>
          </div>

          <div class="fasilitas py-5" id="fasilitas">
            <div class="container">
              <div class="row">
                <h1 class="text-center mb-3"><strong>Fasilitas</strong></h1>
              </div>
              <div class="row">

              <?php foreach ($data_fasilitashotel as $value) { ?>
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="<?php echo base_url().$value['gambar'] ?>" class="card-img-top" alt="">
                    <div class="card-body">
                      <h4 class="card-text"><?php echo $value['nama_fasilitas_hotel']; ?></h4>
                      <div class="caption">
                        <p><?php echo $value['keterangan']; ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>


              </div>
            </div>
          </div>

          <div class="overview py-5 bg-light" id="overview">
            <div class="container">
              <div class="row">
                <h1 class="text-center mb-3"><strong>Overview</strong></h1>
              </div>
              <div class="row">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                      <img src="<?php base_url() ?>assets/img/overview-1.jpg" class="d-block w-100 shadow" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                      </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                      <img src="<?php base_url() ?>assets/img/overview-2.jpg" class="d-block w-100 shadow" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                      </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                      <img src="<?php base_url() ?>assets/img/overview-3.jpg" class="d-block w-100 shadow" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                      </div>
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
    
          <footer class="text-muted py-5">
            <div class="container">
              <p class="float-end mb-1">
                <a href="#">Keatas</a>
              </p>
              <p>Kunjungi <a href="">Instagram</a> kami untuk update info terbaru tentang Hotel Crimson</p>
              <p class="mb-0">Copyright &copy; 2022 Hotel Crimson. All right reserved.</p>
            </div>
          </footer>

          <!-- AOS -->
          <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
          <script>
            AOS.init();
          </script>


          

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>