<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bayes extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		$this->load->library('session');
		$this->simple_login->cek_login();
		$this->load->model('m_bayes');
		//$this->load->model('m_search');
		$this->load->helper('form');
	}

	// Menampilkan seluruh data
	public function index(){
   		$data['aturan'] = $this->m_bayes->daftar_aturan();
   		$data['username'] = $this->session->userdata('username');
   		$data['id_user'] = $this->session->userdata('id_user');

		$this->load->view('layout/back/header1',$data);
		$this->load->view('layout/back/sidebar1',$data);
		$this->load->view('back/bayes/data_bayes',$data);
		$this->load->view('layout/back/footer1',$data);
		
	}
	
	// Menampilkan halaman tambah
	public function tambah() {
		$data['username'] = $this->session->userdata('username');
		$data['id_user'] = $this->session->userdata('id_user');

		$this->load->view('layout/back/header1',$data);
		$this->load->view('layout/back/sidebar1',$data);
		$this->load->view('back/bayes/tambah_bayes',$data);
		$this->load->view('layout/back/footer1',$data);
	
	}

	// Fungsi proses tambah
	public function tambah_aksi(){
		$data_aturan = array(
			'id_bayes' => $this->input->post('id_bayes'),
			'teorema_bayes' => $this->input->post('teorema_bayes'),
			'rentang_bawah' => $this->input->post('rentang_bawah'),
			'rentang_atas' => $this->input->post('rentang_atas')
			);
		$this->m_bayes->tambah($data_aturan);
		$this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Berhasil menambah data</div>");
		redirect('back/bayes');
	}
	
	// Menampilkan halaman edit
	public function edit($id) {	
        $data['data_aturan'] = $this->m_bayes->get_id($id);
        $data['username'] = $this->session->userdata('username');
        $data['id_user'] = $this->session->userdata('id_user');

        $this->load->view('layout/back/header1',$data);
		$this->load->view('layout/back/sidebar1',$data);
		$this->load->view('back/bayes/edit_bayes',$data);
		$this->load->view('layout/back/footer1',$data);
    }

	// Fungsi proses edit
	public function edit_aksi($id) {
    	$data_aturan = array(
    		'id_bayes' => $this->input->post('id_bayes'),
			'teorema_bayes' => $this->input->post('teorema_bayes'),
			'rentang_bawah' => $this->input->post('rentang_bawah'),
			'rentang_atas' => $this->input->post('rentang_atas')
			);

          $this->m_bayes->edit($data_aturan);
          $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); 
          redirect('back/bayes');
    }
	
	// Menghapus data
	public function delete($id) {
		$this->m_bayes->delete($id);
		 $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil dihapus</div>"); 
		redirect('back/bayes');
	}

}