<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <h3>kembang malang</h3>

     
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
                <?php
                	include 'koneksi.php';
$data_barang = mysqli_query($mysqli,"SELECT * FROM pesan where lokasi= 'Batu Flower Garden' ");
$jumlah_barang = mysqli_num_rows($data_barang);

?>
              <h3><?php echo $jumlah_barang; ?></h3>

              <p>Batu Flower Garden</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="index.php?hal=home1" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
                                <?php
                	include 'koneksi.php';
$data_barang = mysqli_query($mysqli,"SELECT * FROM pesan where lokasi= 'Taman Wisata Selecta' ");
$jumlah_barang = mysqli_num_rows($data_barang);

?>
              <h3><?php echo $jumlah_barang; ?></h3>

              <p>Taman Wisata Selecta</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
                
            <?php
                	include 'koneksi.php';
$data_barang = mysqli_query($mysqli,"SELECT * FROM pesan where lokasi= 'Flora Wisata San Terra' ");
$jumlah_barang = mysqli_num_rows($data_barang);

?>
 <h3><?php echo $jumlah_barang; ?></h3>

              <p>Flora Wisata San Terra</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
             <?php
                	include 'koneksi.php';
$data_barang = mysqli_query($mysqli,"SELECT * FROM pesan where lokasi= 'Taman Bunga Coban Talun' ");
$jumlah_barang = mysqli_num_rows($data_barang);

?>
 <h3><?php echo $jumlah_barang; ?></h3>

              <p>Taman Bunga Coban Talun</p>
            </div>
            <div class="icon">
              <i class="iion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
             <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
                
            <?php
                	include 'koneksi.php';
$data_barang = mysqli_query($mysqli,"SELECT * FROM pesan where lokasi= 'Wisata Bunga Sidomulyo' ");
$jumlah_barang = mysqli_num_rows($data_barang);

?>
 <h3><?php echo $jumlah_barang; ?></h3>

              <p>Wisata Bunga Sidomulyo</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
             <?php
                	include 'koneksi.php';
$data_barang = mysqli_query($mysqli,"SELECT * FROM pesan where lokasi= 'Wisata Petik Apel Agro Rakyat' ");
$jumlah_barang = mysqli_num_rows($data_barang);

?>
 <h3><?php echo $jumlah_barang; ?></h3>

              <p>Wisata Petik Apel Agro Rakyat</p>
            </div>
            <div class="icon">
              <i class="iion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      
      <!-- /.row -->
      <!-- Main row -->
      
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>