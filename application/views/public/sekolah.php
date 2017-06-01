<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: mangrove
 * Date: 5/29/2017
 * Time: 11:36 PM
 */

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>" type="text/javascript" charset="utf-8" async defer> </script><!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Beranda - Sekolahku</title>

<!-- Bootstrap -->
<link href="<?php echo base_url('assets'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="<?php echo base_url('assets'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="<?php echo base_url('assets'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="<?php echo base_url('assets'); ?>/build/css/custom.min.css" rel="stylesheet">
<script type="text/javascript">
    $.(document).ready(function () {
        $("#provinsi").change(function () {
            var id_provinsi = $("#id_provinsi").val();
            $.ajax({
                type    : "POST",
                url     : "<?php echo base_url(); ?>beranda/ambil_data",
                data    : "id_provinsi" + id_provinsi,
                success : function (data) {
                    $("#kabupaten").html(data);
                }
            });
        });
    });
</script>

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?php echo base_url('beranda'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                </div>
                <div class="clearfix"></div>
                <br />
                <!-- sidebar menu -->
                <?php require 'assets/sidebar_menu.php'?>
                <!-- /sidebar menu -->
            </div>
        </div>

        <!-- top navigation -->
        <?php require 'assets/top_navigation.php'?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>/beranda/sekolah</h3>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Navigasi</h2>
                                <ul class="nav navbar-right">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <?php
                                $attributes = array('class' => 'form-horizontal form-label-left');
                                echo form_open('cari_sekolah', $attributes);
                                ?>

                                    <!-- Provinsi -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Provinsi</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="prov" id="provinsi">
                                                <option value="0">Pilih Provinsi</option>
                                                <?php
                                                foreach ($provinsi as $i){
                                                    echo "<option value='$i[id_provinsi]'>$i[nama]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Kabupaten -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kabupaten</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="kab" id="kabupaten">
                                                <option value="0">Pilih Kabupaten</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Kecamatan -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kecamatan</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="kec" id="kecamatan">
                                                <option value="0">Pilih Kecamatan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                            <button type="reset" class="btn btn-primary">Reset</button>
                                            <button type="submit" class="btn btn-success">Cari Sekolah</button>
                                        </div>
                                    </div>

                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Data Sekolah</h2>
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
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require 'assets/footer_content.php'?>
        <!-- /footer content -->
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

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url('assets'); ?>/build/js/custom.min.js"></script>
<script type="text/javascript">
    $('select[name="prov"]').on('change', function(){
        $.ajax({
            type : 'POST',
            url  : '<?php echo base_url('beranda/kabupaten') ?>',
            data : {
                prov : $(this).val()
            },
            success : function(option){
                $('select[name="kab"]').html(option);
            }
        });
    });
    $('select[name="kab"]').on('change', function(){
        $.ajax({
            type : 'POST',
            url  : '<?php echo base_url('beranda/kecamatan') ?>',
            data : {
                kab : $(this).val()
            },
            success : function(option){
                $('select[name="kec"]').html(option);
            }
        });
    });
</script>
</body>
</html>
