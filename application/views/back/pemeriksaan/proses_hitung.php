<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data Pemeriksaan</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>back/home_back">Home</a></li>
                        <li class="breadcrumb-item active">Proses Hitung</li>
                    </ol>
                </div>
            </div>
                <?php $id=$this->session->userdata('id');?>
                
              <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-14 col-md-12">
                      <div class="card">
                        <div class="white-box">
                             <?php //for ($x=0; $x<10; $x++){
                                    $tmp=$this->m_pemeriksaan->ambil_penyakit();
                                    $this->m_pemeriksaan->hapustmp();
                                    $this->m_pemeriksaan->hapushasil();
                                    foreach ($tmp->result() as $row ) {
                                      $this->m_pemeriksaan->simpantmp($row);
                                    }

                                    $ambiltmp=$this->m_pemeriksaan->ambilpenyakit();
                                    foreach ($ambiltmp->result() as $row ) {
                                      $id_penyakit=$row->id_penyakit;

                                      $penyakit=$this->m_pemeriksaan->ambilnamapenyakit($id_penyakit);
                                      foreach ($penyakit->result() as $row ) {
                                        echo'<p>'; ?> <h3> <?php echo $row->nama_penyakit; ?> </h3> <?php
                                      } ?>

                                      <hr>
                                      <div class="row">
                                      <div class="col-md-4 col-sm-5 col-xs-12">
                                      <div class="white-box">
                                      <h4>Hitung Nilai Semesta</h4>
                                      <table class="table table-bordered">
                                      <thead>
                                      <tr>
                                      <th>No</th>
                                      <th>Gejala</th>
                                      <th>Bobot</th>
                                      </tr>
                                      </thead>
                                      <?php 
                                      $gejala=$this->m_pemeriksaan->ambilsemuagejala($id_penyakit);
                                      $no=0; $hitungsemesta=0;
                                      foreach ($gejala->result() as $row) { ?>
                                        <?php $no++;?>
                                        <tbody>
                                        <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row->gejala; ?></td>
                                        <td><?php echo $bobot=$row->bobot; ?></td>
                                        </tr>
                                        </tbody>
                                       
                                       <?php
                                       //runus
                                        $hitungsemesta=$hitungsemesta+$bobot;

                                      }?>
                                        </table>

                                      <h5><b>Maka Nilai Semestanya Adalah = <?php echo $hitungsemesta;?></h5></b><br>
                                      
                                      </div>
                                      </div>
                                      
                                      <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                                      <div class="white-box">

                                      <h4>Nilai Semesta P(Hi)</h4> 
                                      <table class="table table-bordered">
                                      <thead>
                                      <tr>
                                      <th>No</th>
                                      <th>Gejala</th>
                                      <th>Perhitungan</th>
                                      <th>Hasil</th>
                                      </tr>
                                      </thead>
                                      <?php
                                      $gejala=$this->m_pemeriksaan->ambilsemuagejala($id_penyakit);
                                      $nilaibayes=0;
                                      $no=0;
                                      foreach ($gejala->result() as $row ) {
                                      $no++; ?>

                                        <tbody>
                                        <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row->gejala; ?></td>
                                        <td><?php echo $row->bobot; ?> / <?php echo $hitungsemesta; ?></td>
                                        <td><?php echo $nilaibagi=$row->bobot/$hitungsemesta; ?></td>
                                        </tr>
                                        </tbody>
                                        
                                        <?php $nilaibayes=$nilaibayes+$nilaibagi;

                                      } ?>
                                      </table>
                                      </div>
                                      </div>
                                      </div>
                                      
                                      <div class="row">
                                      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                      <div class="white-box">

                                      <h4>Probabilitas H tanpa memandang nilai apapun</h4> 
                                      <table class="table table-bordered">
                                      <thead>
                                      <tr>
                                      <th>No</th>
                                      <th>Gejala</th>
                                      <th>Perhitungan</th>
                                      <th>Hasil</th>
                                      </tr>
                                      </thead>
                                      <?php  
                                      $gejala=$this->m_pemeriksaan->ambilsemuagejala($id_penyakit);
                                      $nilaibayes=0;
                                      $no=0; $nilaitotalprobabilitas=0;
                                      foreach ($gejala->result() as $row ) {
                                      $no++;?>

                                      <tbody>
                                        <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row->gejala; ?></td>
                                        <td><?php echo $nilaibagi=$row->bobot/$hitungsemesta; ?> x <?php echo $row->bobot; ?></td>
                                        <td><?php echo $nilaiprobabilitas=$nilaibagi*$row->bobot; ?></td>
                                        </tr>
                                      </tbody>
                                      <?php
                                        //rumus
                                        $nilaitotalprobabilitas=$nilaitotalprobabilitas+$nilaiprobabilitas;
                                        $nilaibayes=$nilaibayes+$nilaibagi;

                                      } ?>
                                      </table>
                                      <p>
                                      <h5><b>Hasil P (hi)x P(E|Hi-n) = <?php echo $nilaitotalprobabilitas; ?></h5></b>
                                      
                                      </div>
                                      </div>

                                      
                                      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                                      <div class="white-box">
                                      <h4>Mencari nilai P(Hi|E)</h4>
                                      <table class="table table-bordered">
                                      <thead>
                                      <tr>
                                      <th>No</th>
                                      <th>Gejala</th>
                                      <th>Perhitungan</th>
                                      <th>Hasil</th>
                                      </tr>
                                      </thead>
                                      <?php  
                                      $gejala=$this->m_pemeriksaan->ambilgejalapenyakit($id_penyakit);
                                      // print_r($gejala->result());
                                      // print '<br>';
                                      $nilaibayes=0;
                                      $no=0; $hasilbayes=0;
                                      foreach ($gejala->result() as $row ) {
                                      $no++; ?>
                                      <tbody>
                                        <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row->gejala; ?></td>
                                        <td><?php echo $row->bobot; ?> x <?php echo $ambilphi=$row->bobot/$hitungsemesta;?> / <?php echo $nilaitotalprobabilitas; ?></td>
                                        <td><?php echo $hasiltb=$row->bobot*$ambilphi/$nilaitotalprobabilitas; ?></td>
                                        </tr>
                                      </tbody>
                                      <?php 
                                        $hasilbayes=$hasilbayes+$hasiltb;

                                      } ?>
                                      </table>
                                      </div>
                                      </div>
                                      </div>
                                      <hr>
                                      <h4><b><p class="text-danger" align="center">Nilai Bayes <?php echo $row->nama_penyakit; ?> = <?php echo $hasilbayes=round($hasilbayes,1);?></h4></b></p>
                                      <hr><br>
                                       <?php
                                      $bayes=$this->m_pemeriksaan->ambilnilaibayes();
                                      $teorema_bayes=0;
                                      foreach ($bayes->result() as $row ) {
                                        if ($hasilbayes>= $row->rentang_bawah && $hasilbayes<= $row->rentang_atas)
                                        {
                                          $teorema_bayes=$row->teorema_bayes;
                                          $idteorema_bayes=$row->id_bayes;
                                        }
                                        else 
                                        {
                                          $teorema_bayes=$teorema_bayes;
                                        }
                                      }

                                    //simpan hasil nilai bayes di tabel tmp hasil
                                        $tmp=array(
                                          'id_penyakit'=>$id_penyakit,
                                          'id_bayes'=>$idteorema_bayes,
                                          'hasil'=>$hasilbayes
                                          );
                                      $this->m_pemeriksaan->simpanhasil($tmp);
                                       $a=$this->m_pemeriksaan->carimax();

                                    } //tekan kene

                                  // }
                                  $id_user=$this->session->userdata('id_user'); //ambil id user
                                  //echo'id_user: '; echo $id_user;
                                  $data=$this->m_pemeriksaan->carimax();
                                  $id_pmax=$data[0]->hasil;// cari nilai bayes max
                                  //print_r($id_pmax);
                                  //echo'max : ' ;  echo $data[0]->hasil;
                                  $cari_p=$this->m_pemeriksaan->caripenyakitmax($id_pmax);
                                  $cari=$cari_p[0]->id_penyakit; // cari id penyakit dari nilai bayes max 
                                  $cariid_bayes=$cari_p[0]->id_bayes;
                                  //print_r($caria); exit;
                                  //echo'id penyakit max : ' ;  echo $cari_p[0]->id_penyakit;
                                  //echo'max : ' ;  echo $cari_p[1]->id_penyakit;
                                  //echo'max : ' ;  echo $data[0]->id_penyakit;

                                  //$tanggal= date('d/m/y h:i:s'); //ambil data tanggal xampp dan computer

                                  //echo 'tanggal' ; echo $tanggal;
                                  $last=$this->m_pemeriksaan->get_lastid();
                                  foreach($last as $row){

                                    $id_diagnosa=$row->id_diagnosa;

                                     $diagnosa=array(
                                        'id_diagnosa'=>$row->id_diagnosa,
                                        'id_user'=>$row->id_user,
                                        'id_sapi'=>$row->id_sapi,
                                        'id_penyakit'=>$cari,
                                        'tgl_diagnosa'=>$row->tgl_diagnosa,
                                        'hasil'=>$id_pmax,
                                        'id_bayes'=>$cariid_bayes
                                        );
                                    $this->m_pemeriksaan->update_hasildiagnosa($id_diagnosa,$diagnosa);

                                  }

                                 
                                    //$id_diagnosa = $this->db->insert_id();
                                    

                                    // simpan check gejala
                                    $ceked_gejala = $this->m_pemeriksaan->get_ceked_gejala();
                                    foreach($ceked_gejala as $row) {
                                      $pemeriksaan = array(
                                        'id_gejala' =>$row->id_gejala,
                                        'id_diagnosa' => $id_diagnosa
                                      );
                                      $this->m_pemeriksaan->simpan_pemeriksaan($pemeriksaan);
                                    }
                                    $id=$id_diagnosa;
                                    //redirect('diagnosa/tampildiagnosa/'.$id);

                                  ?>
                                  <br><?php
                                  $level= $this->session->userdata('level'); 
                                if($level!=1){
                                  redirect('back/pemeriksaan/tampildiagnosa/'.$id);}?>
                                  <center>
                                  <td><a href="<?php echo site_url('back/pemeriksaan/tampildiagnosa/'.$id);?>" class="btn btn-primary btn-xs">Cetak Hasil</a></td>
                                  </center>
                        </div>
                    </div>
                    </div>
                </div>

                
               </div>

                <!-- /.right-sidebar -->
            
