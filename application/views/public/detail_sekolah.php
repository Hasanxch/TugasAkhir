<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * Login: Mangrove
 * Date: 22/05/2017
 * Time: 18.31
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Camara - Home </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url('assets'); ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets'); ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url('assets'); ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url('assets'); ?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets'); ?>/build/css/custom.min.css" rel="stylesheet">
  
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="profile clearfix">
			    <div class="profile_pic">
			        <img src="<?php echo base_url('assets'); ?>/images/lg.png" alt="..." class="img-circle profile_img">
			    </div>
			    </div>

                <div class="clearfix"></div>
                <!-- sidebar menu -->
                <?php require 'assets/sidebar_menu.php' ?>
                <!-- /sidebar menu -->
            </div>
        </div>
        <!-- top navigation -->
        <?php require 'assets/top_navigation.php' ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Detail Sekolah</h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><?php echo $profil[0]['nama_sekolah']; ?></h2>
                                <ul class="nav navbar-right">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                                    <div class="profile_img">
                                        <div id="crop-avatar">
                                            <!-- Current avatar -->
                                            <img class="img-responsive avatar-view" src="<?php echo base_url('assets'); ?>/images/picture.jpg" alt="Avatar" title="Change the avatar">
                                        </div>
                                    </div>
                                    <br>
                                    <ul class="list-unstyled user_data">
                                        <li><i class="fa fa-user user-profile-icon"></i> Kepala Sekolah : <br><b><?php
                                                // mengecek isi varibel kepsek dulu, handel error jika array kosong
                                                if(isset($kepsek[0]['kepala_sekolah'])){
                                                    echo $kepsek[0]['kepala_sekolah'];
                                                } else {
                                                    echo 'Belum terisi';
                                                };
                                                 ?></b>
                                        </li>
                                        <li><i class="fa fa-phone user-profile-icon"></i> Operator : <br><b><?php
                                                // mengecek isi varibel kepsek dulu, handel error jika array kosong
                                                if(isset($kepsek[0]['kepala_sekolah'])){
                                                    echo $kepsek[0]['kepala_sekolah'];
                                                } else {
                                                    echo 'Belum terisi';
                                                };
                                                ?></b>
                                        </li>
                                        <li><i class="fa fa-star user-profile-icon"></i> Akreditasi : <br><b><?php echo $profil[0]['akreditasi']; ?></b></li>
                                        <li><i class="fa fa-book user-profile-icon"></i> Kurikulum : <br><b><?php echo $profil[0]['kurikulum']; ?></b></li>

                                        <li class="m-top-xs">
                                            <i class="fa fa-external-link user-profile-icon"></i>
                                            <a href="<?php echo $profil[0]['web']; ?>" target="_blank"><?php echo $profil[0]['web']; ?></a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab_content0" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Profil</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Struktur</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Pegawai</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Rekapitulasi</a>
                                            </li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content0" aria-labelledby="home-tab">
                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2><i class="fa fa-info-circle"></i> Identitas Sekolah</h2>
                                                        <ul class="nav navbar-right">
                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">
                                                        <ul>
                                                            <li><b>NPSN : </b><?php echo $profil[0]['npsn']; ?></li>
                                                            <li><b>Jenjang : </b><?php echo $profil[0]['jenjang']; ?></li>
                                                            <li><b>SK Pendirian : </b><?php echo $profil[0]['sk_pendirian']; ?></li>
                                                            <li><b>Tanggal Pendirian : </b><?php echo $profil[0]['tgl_pendirian']; ?></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2><i class="fa fa-book"></i> Kontak</h2>
                                                        <ul class="nav navbar-right">
                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">
                                                        <ul>
                                                            <li><b>Telepon : </b><?php echo $profil[0]['telepon']; ?></li>
                                                            <li><b>Email : </b><?php echo $profil[0]['email']; ?></li>
                                                            <li><b>Website : </b><?php echo $profil[0]['web']; ?></li>
                                                            <br>
                                                            <li><b>Alamat : </b><?php echo $profil[0]['alamat']; ?></li>
                                                            <li><b>Kelurahan : </b><?php echo $profil[0]['kel']; ?></li>
                                                            <li><b>Kecamatan : </b><?php echo $kecamatan[0]['nama_kec']; ?></li>
                                                            <li><b>Kabupaten : </b><?php echo $kabupaten[0]['kabupaten']; ?></li>
                                                            <li><b>Prov : </b><?php echo $provinsi[0]['nama']; ?></li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2><i class="fa fa-book"></i> Detail</h2>
                                                        <ul class="nav navbar-right">
                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">
                                                        <ul>
                                                            <li><b>Visi : </b><?php echo $profil[0]['visi']; ?></li>
                                                            <li><b>Misi : </b><?php echo $profil[0]['misi']; ?></li>
                                                            <li><b>Tujuan : </b><?php echo $profil[0]['tujuan']; ?></li>
                                                            <li><b>Motto : </b><?php echo $profil[0]['moto']; ?></li>
                                                            <br>
                                                            <li><b>Listrik : </b><?php echo $profil[0]['listrik']; ?> W</li>
                                                            <li><b>Akses Internet : </b><?php echo $profil[0]['akses_internet']; ?> Mb/s</li>

                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content1" aria-labelledby="profile-tab">

                                                <?php
                                                    if(isset($kepsek[0]['npsn'])){?>
                                                        <ul class="messages">
                                                            <li>
                                                                <img src="<?php echo base_url('assets'); ?>/images/img.jpg" class="avatar" alt="Avatar">
                                                                <div class="message_date">
                                                                    <h3 class="date text-info"></h3>
                                                                    <p class="month">Kepala Sekolah</p>
                                                                </div>
                                                                <div class="message_wrapper">
                                                                    <h4 class="heading"><?php echo $kepsek[0]['kepala_sekolah'];?></h4>
                                                                    <p><b>Tahun Ajaran : </b><?php echo $kepsek[0]['tahun_ajaran']; ?></p>
                                                                    <p><b>NBM : </b><?php echo $kepsek[0]['nbm']; ?></p>
                                                                    <p><b>SK Pengangkatan : </b><?php echo $kepsek[0]['sk_pengangkatan']; ?></p>
                                                                    <p><b>Masa Tugas Ke : </b><?php echo $kepsek[0]['masa_tugaske']; ?></p>
                                                                    <br/>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    <?php } else {?>
                                                        <ul class="messages">
                                                            <li>
                                                                <img src="<?php echo base_url('assets'); ?>/images/img.jpg" class="avatar" alt="Avatar">
                                                                <div class="message_date">
                                                                    <h3 class="date text-info"></h3>
                                                                    <p class="month">Kepala Sekolah</p>
                                                                </div>
                                                                <div class="message_wrapper">
                                                                    <h4 class="heading">Nama: Belum terisi</h4>
                                                                    <p><b>Tahun Ajaran : </b></p>
                                                                    <p><b>NBM : </b></p>
                                                                    <p><b>SK Pengangkatan : </b></p>
                                                                    <p><b>Masa Tugas Ke : </b></p>
                                                                    <br/>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    <?php }; ?>

                                                <?php
                                                    foreach ($wakasek as $i){?>
                                                        <ul class="messages">
                                                            <li>
                                                                <img src="<?php echo base_url('assets'); ?>/images/img.jpg" class="avatar" alt="Avatar">
                                                                <div class="message_date">
                                                                    <h3 class="date text-info"></h3>
                                                                    <p class="month">Bidang <?php echo $i['waka_bidang']; ?></p>
                                                                </div>
                                                                <div class="message_wrapper">
                                                                    <h4 class="heading"><?php echo $i['wakil_kepala']; ?></h4>
                                                                    <p><b>Tahun Ajaran : </b><?php echo $i['tahun_ajaran']; ?></p>
                                                                    <p><b>NBM : </b><?php echo $i['nbm']; ?></p>
                                                                    <p><b>SK Pengangkatan : </b><?php echo $i['sk_pengangkatan']; ?></p>
                                                                    <p><b>Masa Tugas Ke : </b><?php echo $i['masa_tugaske']; ?></p>
                                                                    <br />
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    <?php }; ?>
                                                <!-- end recent activity -->

                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2><i class="fa fa-info-circle"></i> Guru</h2>
                                                        <ul class="nav navbar-right">
                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">
                                                        <table id="datatable-buttons" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>Nama</th>
                                                                <th>NIP</th>
                                                                <th>Jenis Kelamin</th>
                                                                <th>Tahun Ajaran</th>
                                                                <th>Bidang</th>
                                                                <th>Telepon</th>
                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                            <?php
                                                                foreach ($data_guru as $i){?>
                                                                    <tr>
                                                                        <td><?php echo $i['nama_guru']; ?></td>
                                                                        <td><?php echo $i['nip']; ?></td>
                                                                        <td><?php
                                                                        if($i['jk'] == 'L'){
                                                                            echo 'Laki-laki';
                                                                        } else {
                                                                            echo 'Perempuan';
                                                                        }; ?>
                                                                        </td>
                                                                        <td><?php echo $i['tahun_ajaran']; ?></td>
                                                                        <td><?php echo $i['bidang']; ?></td>
                                                                        <td><?php echo $i['telepon']; ?></td>
                                                                    </tr>
                                                                <?php }; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="x_panel">
                                                    <div class="x_title">
                                                        <h2><i class="fa fa-info-circle"></i> Staff</h2>
                                                        <ul class="nav navbar-right">
                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="x_content">
                                                        <table id="datatable-buttons" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>Nama</th>
                                                                <th>NIP</th>
                                                                <th>Jenis Kelamin</th>
                                                                <th>Tahun Ajaran</th>
                                                                <th>Jabatan</th>
                                                                <th>Telepon</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                foreach ($tenkependik as $i){?>
                                                                    <tr>
                                                                        <td><?php echo $i['nama']; ?></td>
                                                                        <td><?php echo $i['nip']; ?></td>
                                                                        <td><?php
                                                                            if($i['jk'] == 'L'){
                                                                                echo 'Laki-laki';
                                                                            } else {
                                                                                echo 'Perempuan';
                                                                            }; ?>
                                                                        </td>
                                                                        <td><?php echo $i['tahun_ajaran']; ?></td>
                                                                        <td><?php echo $i['jabatan']; ?></td>
                                                                        <td><?php echo $i['telepon']; ?></td>
                                                                    </tr>
                                                                <?php }; ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">

                                                <div class="x_content">

                                                    <div class="col-xs-3">
                                                        <!-- required for floating -->
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs tabs-left">
                                                            <li class="active"><a href="#home" data-toggle="tab">2015/2016</a>
                                                            </li>
                                                            <li><a href="#profile" data-toggle="tab">2016/2017</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="col-xs-9">
                                                        <!-- Tab panes -->
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="home">
                                                                <div class="x_panel">
                                                                    <div class="x_title">
                                                                        <h2><i class="fa fa-info-circle"></i> Data PTK dan PD</h2>
                                                                        <ul class="nav navbar-right">
                                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <div class="x_content">
                                                                    </div>
                                                                </div>

                                                                <div class="x_panel">
                                                                    <div class="x_title">
                                                                        <h2><i class="fa fa-book"></i> Data Sarpras</h2>
                                                                        <ul class="nav navbar-right">
                                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <div class="x_content">
                                                                    </div>
                                                                </div>

                                                                <div class="x_panel">
                                                                    <div class="x_title">
                                                                        <h2><i class="fa fa-book"></i> Data Rombel</h2>
                                                                        <ul class="nav navbar-right">
                                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <div class="x_content">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane" id="profile">
                                                                <div class="x_panel">
                                                                    <div class="x_title">
                                                                        <h2><i class="fa fa-info-circle"></i> Data PTK dan PD</h2>
                                                                        <ul class="nav navbar-right">
                                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <div class="x_content">
                                                                    </div>
                                                                </div>

                                                                <div class="x_panel">
                                                                    <div class="x_title">
                                                                        <h2><i class="fa fa-book"></i> Data Sarpras</h2>
                                                                        <ul class="nav navbar-right">
                                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <div class="x_content">
                                                                    </div>
                                                                </div>

                                                                <div class="x_panel">
                                                                    <div class="x_title">
                                                                        <h2><i class="fa fa-book"></i> Data Rombel</h2>
                                                                        <ul class="nav navbar-right">
                                                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                        <div class="clearfix"></div>
                                                                    </div>
                                                                    <div class="x_content">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"></div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- /footer content -->
            <?php require 'assets/footer.php' ?>
        
    </div>
</div>
<!-- jQuery -->
<script src="<?php echo base_url('assets'); ?>/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('assets'); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets'); ?>/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url('assets'); ?>/vendors/nprogress/nprogress.js"></script>
<!-- morris.js -->
<script src="<?php echo base_url('assets'); ?>/vendors/raphael/raphael.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/morris.js/morris.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?php echo base_url('assets'); ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo base_url('assets'); ?>/vendors/moment/min/moment.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url('assets'); ?>/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('assets'); ?>/build/js/custom.min.js"></script>
</body>
</html>

