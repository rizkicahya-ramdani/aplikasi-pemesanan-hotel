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
              <?php foreach ($hotel->result() as $value): ?>
              <form class="form-horizontal" method="post" action="<?php echo base_url('hotel/update') ?>">
                <div class="card-body">                
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ID Hotel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $value->id_hotel; ?>" disabled>
                            <input type="hidden" class="form-control" name="id_hotel" value="<?php echo $value->id_hotel; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Hotel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_hotel" value="<?php echo $value->nama_hotel; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Slogan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="slogan" value="<?php echo $value->slogan; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Perusahaan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_perusahaan" value="<?php echo $value->nama_perusahaan; ?>" placeholder="Nama Perusahaan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="alamat" value="<?php echo $value->alamat; ?>" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telepon</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="telepon" value="<?php echo $value->telepon; ?>" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Faximile</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="faximile" value="<?php echo $value->faximile; ?>" placeholder="Faximile" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="email" value="<?php echo $value->email; ?>" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Website</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="website" value="<?php echo $value->website; ?>" placeholder="Keterangan" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-sm btn-default">Reset</button>
                </div>
            </form>
            <?php endforeach; ?>

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