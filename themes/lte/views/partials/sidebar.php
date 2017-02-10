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
        <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Data Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Akuntansi</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="<?php echo base_url('siswa/data/ak/1') ?>">AK1</a></li>
              <li><a href="<?php echo base_url('siswa/data/ak/2') ?>">AK2</a></li>
              <li><a href="<?php echo base_url('siswa/data/ak/3') ?>">AK3</a></li>
              <li><a href="<?php echo base_url('siswa/data/ak/4') ?>">AK4</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Administrasi Perkantoran</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="<?php echo base_url('siswa/data/ap/1') ?>">AP1</a></li>
              <li><a href="<?php echo base_url('siswa/data/ap/2') ?>">AP2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Pemasaran</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="<?php echo base_url('siswa/data/pm/1') ?>">PM1</a></li>
              <li><a href="<?php echo base_url('siswa/data/pm/2') ?>">PM2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Tek Komputer &Jaringan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="<?php echo base_url('siswa/data/tkj/1') ?>">TKJ1</a></li>
              <li><a href="<?php echo base_url('siswa/data/tkj/2') ?>">TKJ2</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url('siswa/data/mm') ?>"><i class="fa fa-user"></i> Multimedia</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>