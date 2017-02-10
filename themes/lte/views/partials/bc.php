 <h1>
 <!-- data siswa -->
        <?php if($this->uri->segment(1)=='admin'){ echo 'Dashboard Admin <small>Data Admin</small>';}elseif($this->uri->segment(3)=='ak' and $this->uri->segment(2)=='data'){ echo 'Data Siswa <small>Akuntansi</small>';}elseif($this->uri->segment(3)=='ap'and $this->uri->segment(2)=='data'){ echo 'Data Siswa <small>Administrasi Perkantoran</small>';}elseif($this->uri->segment(3)=='pm'and $this->uri->segment(2)=='data'){ echo 'Data Siswa <small>Pemasaran</small>';}elseif($this->uri->segment(3)=='tkj'and $this->uri->segment(2)=='data'){ echo 'Data Siswa <small>Teknik Komputer & Jaringan</small>';}elseif($this->uri->segment(3)=='mm'and $this->uri->segment(2)=='data'){ echo 'Data Siswa <small>MultiMedia</small>';}?>
<!-- tambah siswa -->
        <?php if($this->uri->segment(3)=='ak' and $this->uri->segment(2)=='tambah_siswa'){ echo 'Tambah Data Siswa <small>Akuntansi</small>';}elseif($this->uri->segment(3)=='ap'and $this->uri->segment(2)=='tambah_siswa'){ echo 'Tambah Data Siswa <small>Administrasi Perkantoran</small>';}elseif($this->uri->segment(3)=='pm'and $this->uri->segment(2)=='tambah_siswa'){ echo 'Tambah Data Siswa <small>Pemasaran</small>';}elseif($this->uri->segment(3)=='tkj'and $this->uri->segment(2)=='tambah_siswa'){ echo 'Tambah Data Siswa <small>Teknik Komputer & Jaringan</small>';}elseif($this->uri->segment(3)=='mm'and $this->uri->segment(2)=='tambah siswa'){ echo 'Tambah Data Siswa <small>MultiMedia</small>';}?>
      </h1>
      <ol class="breadcrumb">
      <?php if($this->uri->segment(1)=='admin'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Dashboard</li>
        <?php  }elseif($this->uri->segment(3)=='ak'and $this->uri->segment(2)=='data'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Data Siswa</li>
        <li class="active">Akuntansi</li>
        <?php  } elseif($this->uri->segment(3)=='ap'and $this->uri->segment(2)=='data'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Data Siswa</li>
        <li class="active">Administrasi Perkantoran </li>
        <?php  }elseif($this->uri->segment(3)=='pm'and $this->uri->segment(2)=='data'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Data Siswa</li>
        <li class="active">Pemasaran </li>
        <?php }elseif($this->uri->segment(3)=='tkj'and $this->uri->segment(2)=='data'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Data Siswa</li>
        <li class="active">Teknik Komputer & Jaringan </li>
        <?php  }elseif($this->uri->segment(3)=='mm'and $this->uri->segment(2)=='data'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Data Siswa</li>
        <li class="active">MultiMedia </li>
        <?php  }?>

        <?php if($this->uri->segment(3)=='ak'and $this->uri->segment(2)=='tambah_siswa'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Tambah Data Siswa</li>
        <li class="active">Akuntansi</li>
        <?php  } elseif($this->uri->segment(3)=='ap'and $this->uri->segment(2)=='tambah_siswa'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Tambah Data Siswa</li>
        <li class="active">Administrasi Perkantoran </li>
        <?php  }elseif($this->uri->segment(3)=='pm'and $this->uri->segment(2)=='tambah_siswa'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Tambah Data Siswa</li>
        <li class="active">Pemasaran </li>
        <?php }elseif($this->uri->segment(3)=='tkj'and $this->uri->segment(2)=='tambah_siswa'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Tambah Data Siswa</li>
        <li class="active">Teknik Komputer & Jaringan </li>
        <?php  }elseif($this->uri->segment(3)=='mm'and $this->uri->segment(2)=='tambah_siswa'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Tambah Data Siswa</li>
        <li class="active">MultiMedia </li>
        <?php  }?>
      </ol>