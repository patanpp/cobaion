 <h1>
        <?php if($this->uri->segment(1)=='admin'){ echo 'Dashboard Admin <small>Data Admin</small>';}elseif($this->uri->segment(3)=='ak'){ echo 'Data Siswa <small>Akuntansi</small>';}elseif($this->uri->segment(3)=='ap'){ echo 'Data Siswa <small>Administrasi Perkantoran</small>';}elseif($this->uri->segment(3)=='pm'){ echo 'Data Siswa <small>Pemasaran</small>';}elseif($this->uri->segment(3)=='tkj'){ echo 'Data Siswa <small>Teknik Komputer & Jaringan</small>';}elseif($this->uri->segment(3)=='mm'){ echo 'Data Siswa <small>MultiMedia</small>';}?>
      </h1>
      <ol class="breadcrumb">
      <?php if($this->uri->segment(1)=='admin'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Dashboard</li>
        <?php  }elseif($this->uri->segment(3)=='ak'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Data Siswa</li>
        <li class="active">Akuntansi</li>
        <?php  } elseif($this->uri->segment(3)=='ap'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Data Siswa</li>
        <li class="active">Administrasi Perkantoran </li>
        <?php  }elseif($this->uri->segment(3)=='pm'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Data Siswa</li>
        <li class="active">Pemasaran </li>
        <?php }elseif($this->uri->segment(3)=='tkj'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Data Siswa</li>
        <li class="active">Teknik Komputer & Jaringan </li>
        <?php  }elseif($this->uri->segment(3)=='mm'){?>
        <li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
        <li class="active">Data Siswa</li>
        <li class="active">MultiMedia </li>
        <?php  }?>
      </ol>