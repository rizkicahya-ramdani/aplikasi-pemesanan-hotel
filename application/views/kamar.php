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
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Kamar</th>
                        <th>ID Kamar Tipe</th>
                        <th>Nomor Kamar</th>
                        <th>Max Dewasa</th>
                        <th>Max Anak</th>
                        <th>Status Kamar</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no=0;
                        foreach ($kamar->result() as $value):
                            $no++;
                        ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $value->id_kamar; ?></td>
                        <td><?php echo $value->id_kamar_tipe; ?></td>
                        <td><?php echo $value->nomor_kamar; ?></td>
                        <td><?php echo $value->max_dewasa; ?></td>
                        <td><?php echo $value->max_anak; ?></td>
                        <td><?php echo $value->status_kamar; ?></td>
                        <td>
                        <a href=" <?php echo base_url('kamar/ubah/').$value->id_kamar ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href=" <?php echo base_url('kamar/hapus/').$value->id_kamar ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                        <?php 
                        endforeach;
                        ?>
                    </tbody>
                </table> 

              </div>
              <div class="card-footer clearfix">
                <a href=" <?php echo base_url('kamar/tambah') ?> " class="btn btn-xs btn-primary">Tambah Data</a>
            </div>
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