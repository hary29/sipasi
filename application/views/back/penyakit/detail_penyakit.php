<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
             <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                       <div class="card">
                        <div class="white-box">
                             <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped">
                                <?php 
                                foreach($penyakit as $list) { ?>
                                  <tr>
                                    <th>Kode Penyakit</th>
                                    <th>:</th>
                                    <th><?php echo $list['id_penyakit']; ?></th>
                                  </tr>

                                  <tr>
                                    <th>Nama Penyakit</th>
                                    <th>:</th>
                                    <th><?php echo $list['nama_penyakit']; ?></th>
                                  </tr>

                                  <tr>
                                    <th>Definisi</th>
                                    <th>:</th>
                                    <th><?php echo $list['definisi']; ?></th>
                                  </tr>

                                    <tr>
                                    <th>Pengobatan</th>
                                    <th>:</th>
                                    <th><?php echo $list['pengobatan']; ?></th>
                                  </tr>

                                <?php } ?>
                            
                              </table>

                              <div align="center">
                                    <a href="<?php echo base_url(); ?>back/penyakit" label class="btn btn-primary">Kembali</a><br>
                                  </div>
                        </div>
                    </div>
                    </div>
                </div>

                
               </div>

                <!-- /.right-sidebar -->
            
