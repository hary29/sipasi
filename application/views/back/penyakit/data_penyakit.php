<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Penyakit</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>back/home_back">Home</a></li>
                        <li class="breadcrumb-item active">Data Penyakit</li>
                    </ol>
                </div>
            </div>
             <div class="container-fluid">
                 <div class="row">
                    <div class="col-sm-12">
                       <div class="card">
                        <div class="white-box">
                             <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
                    
                    <tr class="active">
                      <th width="3%" scope="col">No</th>
                      <th width="3%" scope="col">Kode Penyakit</th>
                      <th width="5%" scope="col">Nama Penyakit</th>
                      <th width="5%" scope="col">Definisi</th>
                      <th width="5%" scope="col">Pengobatan</th>
                      <th width="5%" scope="col">Aksi</th>
                    </tr>
                    <?php 
                     if (empty($penyakit)) {?>
                            <div style="color:#0000FF"> <label for="aa" class="col-sm-4">
                                        <h3><b>Data Penyakit Kosong</b></h3></label></div>
                             <?php }  else {
                      $no = $offset;
                    foreach($penyakit as $list) { ?>
                    	
                    <tr>
                      <td><?php echo ++$no ?></a></td>
                      <td><?php echo $list['kode_penyakit']; ?></td>
                      <td><?php echo $list['nama_penyakit']; ?></td>
                      <td><?php echo $list['definisi']; ?></td>
                      <td><?php echo $list['pengobatan']; ?></td>
                      <td>
                        <?php $level= $this->session->userdata('level'); 
                                if($level==1){?>
                      <a href="<?php echo base_url() ?>back/penyakit/edit/<?php echo $list['id_penyakit'] ?>"><label class="btn btn-info btn-sm" >edit</a> &nbsp 
                      <a href="<?php echo base_url() ?>back/penyakit/delete/<?php echo $list['id_penyakit'] ?>"onclick="return confirm ('Apakah Anda yakin akan menghapus data ini ?')"><label class="btn btn-danger btn-sm delete" >delete</a> &nbsp <?php } ?>
                      <a href="<?php echo base_url() ?>back/penyakit/detail/<?php echo $list['id_penyakit'] ?>"><label class="btn btn-warning btn-sm" >detail</a>&nbsp
                      </td>
                    </tr>
                    <?php } }?>
                    <?php echo $this->session->flashdata('pesan'); ?>
                    
                    
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
            