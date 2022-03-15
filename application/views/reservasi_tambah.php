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
              <form class="form-horizontal" method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                <div class="card-body">                
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ID Reservasi</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="id_reservasi" placeholder="ID Reservasi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ID Pelanggan</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="id_pelanggan" placeholder="ID Pelanggan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kode Booking</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="kode_booking" placeholder="Kode Booking" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal In</label>
                        <div class="col-sm-8">
                          <input type="date" class="form-control" name="tanggal_in" placeholder="Tanggal In" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jam In</label>
                        <div class="col-sm-8">
                          <input type="time" class="form-control" name="jam_in" placeholder="Jam In" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Out</label>
                        <div class="col-sm-8">
                          <input type="date" class="form-control" name="tanggal_out" placeholder="Tanggal Out" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jam Out</label>
                        <div class="col-sm-8">
                          <input type="time" class="form-control" name="jam_out" placeholder="Jam Out" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Biaya</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="biaya" placeholder="Biaya" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pajak</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" name="pajak" placeholder="Pajak" required>
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