<?php include('../_partials/top.php') ?>
<!--
<h1 class="page-header">Dasbor</h1>
-->
<?php include('data-index.php') ?>
<!-- dashbord template -->
<div class="row">
      <div class="panel well">
        <div class="row">
            <div class="col-md-12">
                    <div class="col-xs-12">
                    <font color="grey"><h4>Selamat datang di Aplikasi Kearsipan Pendaftaran Penduduk</h4></font>
                </div>
                </div>
                <!-- /.col-lg-12 -->
            <!-- /.row -->
        </div>
        </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 ">
                                    <div><h3>Data Penduduk</h3><br>
                                    </div>
                                    <div>
                                      <p>Total warga : <?php echo $jumlah_warga['total'] ?> </br> Laki-laki : <?php echo $jumlah_warga_l['total'] ?> </br>Perempuan : <?php echo $jumlah_warga_p['total'] ?> </br><br/>Warga di atas 17 tahun : <?php echo $jumlah_warga_ld_17['total'] ?> orang, </br>warga di bawah 17 tahun : <?php echo $jumlah_warga_kd_17['total'] ?> orang.
                                      </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="../warga">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9 ">
                                    <div><h3>Data Kartu Keluarga</h3></div>
                                    <div><p>Jumlah : <?php echo $jumlah_kartu_keluarga['total'] ?> data</p></div>
                                </div>
                            </div>
                        </div>
                        <a href="../kartu-keluarga">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div><h3>Data Mutasi</h3></div>
                                    <div>
                                      <p>
                                      Jumlah : <?php echo $jumlah_mutasi_masuk['total'] ?> 
        </p><!--
        <p>
           Warga di atas 17 tahun berjumlah <?php echo $jumlah_mutasi_ld_17['total'] ?> orang, dan di bawah 17 tahun berjumlah <?php echo $jumlah_mutasi_kd_17['total'] ?> orang.
        </p>
      -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="../mutasi-datang">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bar-chart-o fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div><strong>Laporan</strong></div>
                                </div>
                            </div>
                        </div>
                        <a href="index.php?page=laporan">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
              -->
            </div>




<!-- ./end custom template dashbord -->
<!--
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="panel panel-default">
      <div class="panel-body">
        <h3>Data Penduduk</h3>
        <p>
          Total ada <?php echo $jumlah_warga['total'] ?> data warga. <?php echo $jumlah_warga_l['total'] ?> di antaranya laki-laki, dan <?php echo $jumlah_warga_p['total'] ?> diantaranya perempuan.
        </p>
        <p>
           Warga di atas 17 tahun berjumlah <?php echo $jumlah_warga_ld_17['total'] ?> orang, dan di bawah 17 tahun berjumlah <?php echo $jumlah_warga_kd_17['total'] ?> orang.
        </p>
      </div>
      <div class="panel-footer">
        <a href="../warga" class="btn btn-default" role="button">
          <span class="glyphicon glyphicon-book"></span> Detil »
        </a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="panel panel-default">
      <div class="panel-body">
        <h3>Data Kartu Keluarga</h3>
        <p>Total ada <?php echo $jumlah_kartu_keluarga['total'] ?> data kartu keluarga</p>
      </div>
      <div class="panel-footer">
        <a href="../kartu-keluarga" class="btn btn-default" role="button">
          <span class="glyphicon glyphicon-inbox"></span> Detil »
        </a>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="panel panel-default">
      <div class="panel-body">
        <h3>Data Mutasi</h3>
        <p>
          Total ada <?php echo $jumlah_mutasi['total'] ?> data mutasi. <?php echo $jumlah_mutasi_l['total'] ?> di antaranya laki-laki, dan <?php echo $jumlah_mutasi_p['total'] ?> diantaranya perempuan.
        </p>
        <p>
           Warga di atas 17 tahun berjumlah <?php echo $jumlah_mutasi_ld_17['total'] ?> orang, dan di bawah 17 tahun berjumlah <?php echo $jumlah_mutasi_kd_17['total'] ?> orang.
        </p>
      </div>
      <div class="panel-footer">
        <a href="../mutasi" class="btn btn-default" role="button">
          <span class="glyphicon glyphicon-export"></span> Detil »
        </a>
      </div>
    </div>
  </div>
</div>
-->
</div>
<?php include('../_partials/bottom.php') ?>
