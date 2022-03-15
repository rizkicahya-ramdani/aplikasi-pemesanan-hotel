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
              <?php foreach ($user->result() as $value): ?>
              <form class="form-horizontal" method="post" action="<?php echo base_url('user/update') ?>">
                <div class="card-body">                
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">ID User</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="<?php echo $value->id_user; ?>" disabled>
                            <input type="hidden" class="form-control" name="id_user" value="<?php echo $value->id_user; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="username" value="<?php echo $value->username; ?>" disabled>
                            <input type="hidden" class="form-control" name="username" value="<?php echo $value->username; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama" value="<?php echo $value->nama; ?>" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-4">
                        <select class="form-control" style="width: 100%;" name="level" required>
                            <option value="<?php echo $value->level ?>" selected></option>
                            <option value="Administrator">Administrator</option>
                            <option value="Resepsionis">Resepsionis</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Akses Terakhir</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" name="akses_terakhir" required>
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