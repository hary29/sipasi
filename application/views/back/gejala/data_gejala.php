
        <!-- Left navbar-header end -->
        <!-- Page Content -->
      <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Gejala</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>back/home_back">Home</a></li>
                        <li class="breadcrumb-item active">Data gejala</li>
                    </ol>
                </div>
            </div>
             <div class="container-fluid">
                 <div class="row">
                   <div class="card">
                    <div class="col-sm-12">
                        <div class="white-box">
                             <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered table-striped">
                    
                    <tr class="active">
                      <th width="3%" scope="col">No</th>
                      <th width="5%" scope="col">Kode Gejala</th>
                      <th width="5%" scope="col">Nama Gejala</th>
                      <?php $level= $this->session->userdata('level'); 
                                if($level==1){?>
                      <th width="5%" scope="col">Aksi</th><?php } ?>
                    </tr>
                    <?php 
                      $no = $offset;
                    foreach($gejala as $list) { ?>
                    <tr>
                      <td><?php echo ++$no ?></a></td>
                      <td><?php echo $list['kode_gejala']; ?></td>
                      <td><?php echo $list['gejala']; ?></td>
                      <?php $level= $this->session->userdata('level'); 
                                if($level==1){?>
                      <td>
                      <a href="<?php echo base_url() ?>back/gejala/edit/<?php echo $list['id_gejala'] ?>"><label class="btn btn-info btn-sm" >edit</a> &nbsp 
                      <a href="<?php echo base_url() ?>back/gejala/delete/<?php echo $list['id_gejala'] ?>"><label class="btn btn-danger btn-sm delete" >delete</a>
                      </td><?php } ?>
                    </tr>
                    <?php } ?>
                    <?php echo $this->session->flashdata('pesan'); ?>
                    
                    
                  </table>
                  
                
                                  </div>
                  
                               
                          </div>

                      </div>
                      <div class="card">
                 <?php echo $halaman ?>
                 </div>
                  </div>

                  <script>
                  $(document).ready(function() {
                  $('.delete').click(function() {
                  return confirm("Apakah anda yakin menghapus data ini?");
                  });
                  });

                  $(function() {
                  $('[data-toggle="tooltip"]').tooltip()
                  })
                  </script>

                        </div>
                    </div>
                </div></div>
                </div>
                <!-- /.right-sidebar -->
            
