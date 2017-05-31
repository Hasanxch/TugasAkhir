<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: mangrove
 * Date: 5/31/2017
 * Time: 3:36 PM
 */
?>
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="<?php echo base_url('beranda'); ?>"><i class="fa fa-home"></i> Beranda </a>
            </li>
            <li><a><i class="fa fa-database"></i> Data Pokok <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('beranda/data'); ?>">Ringkasan</a></li>
                    <li><a href="<?php echo base_url('beranda/sekolah'); ?>">Data Sekolah</a></li>
                    <li><a href="<?php echo base_url('beranda/siswa'); ?>">Data Peserta Didik</a></li>
                    <li><a href="<?php echo base_url('beranda/rombel'); ?>">Data Rombel</a></li>
                    <li><a href="<?php echo base_url('beranda/pegawai'); ?>">Data Pegawai</a></li>
                </ul>
            </li>
            <li><a><i class="fa fa-bar-chart-o"></i> Pertumbuhan Data <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?php echo base_url('beranda/pertumbuhan'); ?>">Ringkasan</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('login'); ?>"><i class="fa fa-sign-in"></i> Login </a>
        </ul>
    </div>
    <div class="menu_section">
        <h3>More</h3>
        <ul class="nav side-menu">
            <li><a href="<?php echo base_url('beranda/kontak'); ?>"><i class="fa fa-paper-plane"></i> Kontak </a></li>
            <li><a href="<?php echo base_url('beranda/tentang'); ?>"><i class="fa fa-info-circle"></i> Tentang </a></li>
        </ul>
    </div>

</div>
