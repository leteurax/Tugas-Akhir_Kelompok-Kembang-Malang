<div class="content-wrapper" style="min-height: 956px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        TAMBAH DATA user
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form tambah data user</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="siswa/aksi_tambah_siswa.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Enter Nama" name="nama">
                </div>
                <label>email</label>
                  <input type="text" class="form-control" placeholder="Enter Nama" name="email">
                </div>
                <label>password</label>
                  <input type="text" class="form-control" placeholder="Enter Nama" name="password">
                </div>

              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>