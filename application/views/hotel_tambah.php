<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>io
              </div>
              <form class="form-horizontal" method="post" action="<?php echo base_url('hotel/simpan') ?>">
                <div class="card-body">                
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Hotel</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_hotel" placeholder="Nama Hotel" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Slogan</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="slogan" placeholder="Slogan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Perusahaan</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="nama_perusahaan" placeholder="Nama Perusahaan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="telepon" placeholder="Telepon" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Faximile</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="faximile" placeholder="Faximile" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Website</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="website" placeholder="website" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-sm btn-default">Reset</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->