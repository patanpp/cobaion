<!-- sidebar: style can be found in sidebar.less -->
<style type="text/css">
  .aktif{

  }
</style>
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo admin_theme_locations();?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('username'); ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li  class="<?php if($this->uri->segment(1)=='admin') {echo 'active';} ?> "><a href="<?php echo base_url('admin');?>"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
        <li class="treeview <?php if($this->uri->segment(1)=='siswa') {echo 'active';} ?> ">
          <a href="#"><i class="fa fa-link"></i> <span>Data Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('siswa/siswa/ak') ?>">Akuntansi</a></li>
            <li><a href="<?php echo base_url('siswa/siswa/ap') ?>">Administrasi Perkantoran</a></li>
            <li><a href="<?php echo base_url('siswa/siswa/pm') ?>">Pemasaran</a></li>
            <li><a href="<?php echo base_url('siswa/siswa/tkj') ?>">Teknik Komunikasi Jaringan</a></li>
            <li><a href="<?php echo base_url('siswa/siswa/mm') ?>">Multimedia</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>