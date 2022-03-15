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
              <?php foreach ($fasilitashotel->result() as $value): ?>
              <?php echo form_open_multipart('fasilitashotel/update') ?>
                <div class="card-body">                
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Id Fasilitas Hotel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $value->id_fasilitas_hotel; ?>" disabled>
                            <input type="hidden" class="form-control" name="id_fasilitas_hotel" value="<?php echo $value->id_fasilitas_hotel; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Fasilitas Hotel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama_fasilitas_hotel" value="<?php echo $value->nama_fasilitas_hotel; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="gambar" value="<?php echo $value->gambar; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="keterangan" value="<?php echo $value->keterangan; ?>" placeholder="Keterangan" required>
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