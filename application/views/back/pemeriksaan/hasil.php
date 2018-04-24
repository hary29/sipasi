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
                    <div class="col-sm-12">
                       <div class="card">
                        <div class="white-box">
                             <table class="table">
                                    <?php foreach($viewdiagnosa as $row ) { ?>
                                        <tr class="success">
                                    <tr>
                                      <td>Tanggal Periksa</td>
                                      <td>:</td>
                                      <th><?php echo $row->tgl_diagnosa; ?></th>
                                    </tr>
                                    <tr>
                                      <td>User</td>
                                      <td>:</td>
                                      <th><?php echo $row->nama; ?></th>
                                    </tr>
                                    <tr>
                                      <td>Nama Sapi</td>
                                      <td>:</td>
                                      <th><?php echo $row->nama_sapi; ?></th>
                                    </tr>
                                    <tr>
                                      <td>Usia Sapi</td>
                                      <td>:</td>
                                      <th><?php echo $y; echo " tahun "; echo "$m"; echo " bulan "; echo "$d"; echo " hari"; ?></th>
                                    </tr>
                                    <tr>
                                      <td>Penyakit</td>
                                      <td>:</td>
                                      <th><?php echo $row->nama_penyakit; ?></th>
                                    </tr>
                                    <tr>
                                      <td>Definisi Penyakit</td>
                                      <td>:</td>
                                      <th><?php echo $row->definisi; ?></th>
                                    </tr>
                                    <tr>
                                      <td>Probabilitas</td>
                                      <td>:</td>
                                      <th><?php echo $row->hasil; ?></th>
                                    </tr>
                                    <tr>
                                      <td>Hasil Diagnosa</td>
                                      <td>:</td>
                                      <th><?php echo $row->teorema_bayes; ?></th>
                                    </tr>
                                    
                                    <?php
                                    if ($row->hasil > 0.5){ ?>
                                       <tr>
                                      <td>Pengobatan</td>
                                      <td>:</td>
                                      <th><?php echo $row->pengobatan; ?></th>
                                    </tr>
                                   <?php } ?>
                                        <?php }?>
                                    <tr>
                                      <td>Gejala Yang Dipilih</td>
                                      <td>:</td>
                                      <th> <?php 
                                      $no=1;
                                      foreach($viewinput as $row ) {
                                      $gja=$row->gejala;?><?php echo $no++;?>.&nbsp<?php echo $gja;?><br><?php } ?></th>
                                    </tr>
                                    </tbody>
                                </table>
                               
                                    <div align="center">
                                    <a href="<?php echo base_url(); ?>back/pemeriksaan" label class="btn btn-primary">Kembali</a>
                                    </div>
                        </div>
                    </div>
                </div>
                
                
                     


                
                </div>
                <!-- /.right-sidebar -->
            
