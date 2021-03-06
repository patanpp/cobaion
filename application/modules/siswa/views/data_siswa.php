  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/datatables/dataTables.bootstrap.css">
          <!-- Custom Tabs (Pulled to the right) -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs pull-right">
              <li class="active"><a href="#tab_1-1" data-toggle="tab">Kelas X</a></li>
              <li><a href="#tab_2-2" data-toggle="tab">Kelas XI</a></li>
              <li><a href="#tab_3-2" data-toggle="tab">Kelas XII</a></li>
              <li class="pull-left header"><i class="fa fa-th"></i> <b>Data Siswa <?php echo $jurusan?></b></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1-1">
               <section class="content">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"><b>Data Siswa Kelas X</b></h3>
                  </div>
                  <a href="<?php echo base_url('siswa/tambah_siswa/'.$jr.'/'.$kelas);?>"><button type="button" class="btn btn-block btn-info" style="width: 10%; margin-left: 2%; font-weight: bold;"><span class="fa fa-plus"></span> Tambah</button> </a>
                  <br>                
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="satu1ak" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                      </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </section>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2-2">
               <section class="content">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"><b>Data Siswa Kelas XI</b></h3>
                  </div>
                   <a href="<?php echo base_url('siswa/tambah_siswa/'.$jr.'/'.$kelas);?>"><button type="button" class="btn btn-block btn-info" style="width: 10%; margin-left: 2%; font-weight: bold;"><span class="fa fa-plus"></span> Tambah</button> </a>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="dua1ak" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                      </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </section>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3-2">
                <section class="content">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"><b>Data Siswa Kelas XII</b></h3>
                  </div>
                   <a href="<?php echo base_url('siswa/tambah_siswa/'.$jr.'/'.$kelas);?>"><button type="button" class="btn btn-block btn-info" style="width: 10%; margin-left: 2%; font-weight: bold;"><span class="fa fa-plus"></span> Tambah</button> </a>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <table id="tiga1ak" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>X</td>
                      </tr>
                      </tbody>
                      <tfoot>
                        <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </section>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

