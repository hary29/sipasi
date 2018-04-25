<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Pemeriksaan</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>back/home_back">Home</a></li>
                        <li class="breadcrumb-item active">Semua Hasil Pemeriksaan</li>
                    </ol>
                </div>
            </div>
             <div class="container-fluid">
                 <div class="row">
                    <div class="col-sm-12">
                       <div class="card">
                        <div class="white-box">
                          <div class="form-group">
                        <form action="<?php echo base_url();?>back/pemeriksaan/view_hasil_pencarian" method=POST>
                              <div class="input-group">
                              
                                    <input type="text" class="form-control" name="search" id="search" placeholder="Pencarian">
                                    <button type="submit" value="cari" class="btn btn-sm"><span class="glyphicon glyphicon-search"></span>Cari</button>
                                    <div class="input-group-addon"><a href="<?php echo base_url() ?>back/pemeriksaan/view_hasil_pencarian">
                              
                                    </div>
                                    </form>
                              </div>
                        </div>
                             <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
                    
                    <tr class="active">
                      <th width="3%" scope="col">No</th>
                      <th width="5%" scope="col">Nama</th>
                      <th width="5%" scope="col">Nama Sapi</th>
                      <th width="15%" scope="col">Penyakit</th>
                      <th width="15%" scope="col">Tanggal</th>
                      <th width="5%" scope="col">Probabilitas</th>
                      <th width="5%" scope="col">Hasil Diagnosa</th>
                      <th width="5%" scope="col">Aksi</th>
                    </tr>
                    <?php 
                      $no = $offset;
                    foreach($vhs as $list) { ?>
                    <tr>
                      <td><?php echo ++$no ?></a></td>
                      <td><?php echo $list['username']; ?></td>
                      <td><?php echo $list['nama_sapi']; ?></td>
                      <td><?php echo $list['nama_penyakit']; ?></td>
                      <td><?php echo $list['tgl_diagnosa']; ?></td>
                      <td><?php echo $list['hasil']; ?></td>
                      <td><?php echo $list['teorema_bayes']; ?></td>
                      <td> <a href="<?php echo base_url() ?>back/pemeriksaan/tampildiagnosa1/<?php echo $list['id_diagnosa'] ?>"><label class="btn btn-warning btn-sm" >detail</a>&nbsp</td>
                    </tr>
                    <?php } ?>
                
                  </table>
                                  </div>
                                 
                              </div>
                          </div>
                          <div class="card">
                 <?php echo $halaman ?>
                 </div>
                      </div>
                  </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- /.right-sidebar -->
            
