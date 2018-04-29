<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
	public function __construct()	{
		parent::__construct();
		$this->load->library('session');
		$this->simple_login->cek_login();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('M_user');
		$this->load->model('M_sapi');
	}


	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$kode = $this->M_sapi->get_last_id_sapi();
		// print_r($kode);exit;
        if ($kode) {
            $cut_code = substr($kode->kode_sapi, 2, 4);
            
            $k = $cut_code+1;//print_r($k);exit;
            if ($k == 1) {
                $kode1 = "S-1001";
            }else{
                $kode1 = "S-".$k;
            }
        }else{
            $kode1 = "S-1001";
        }
        $data['kode'] = $kode1;
		$data['data_user'] = $this->M_user->get_user();
		$this->load->view('layout/back/header1');
		$this->load->view('layout/back/sidebar1');
		$this->load->view('back/register/register_sapi',$data);
		$this->load->view('layout/back/footer1');
	}

	public function register_user()
	{
		 $kode = $this->M_user->get_last_id();
		// print_r($kode);exit;
        if ($kode) {
            $cut_code = substr($kode->kode_pendaftaran, 3, 4);
            
            $k = $cut_code+1;//print_r($k);exit;
            if ($k == 1) {
                $kode1 = "PD-1001";
            }else{
                $kode1 = "PD-".$k;
            }
        }else{
            $kode1 = "PD-1001";
        }
        $data['kode'] = $kode1;
        $data['data_level'] = $this->M_user->get_level();
        $this->load->view('layout/back/header1');
		$this->load->view('layout/back/sidebar1');
		$this->load->view('back/register/register_user',$data);
		$this->load->view('layout/back/footer1');
	}

	public function tambah_sapi()
	{
		//print_r($_POST);exit;
		$level= $this->session->userdata('level'); 
                                if($level==1){
		$this->form_validation->set_rules('id_user','id_user','required');
		$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
		if($this->form_validation->run() == false){
			$this->session->set_flashdata('sukses', "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"\"><strong>error!</strong><br></i> silahkan pilih user dan inputkan tanggal lahir</div>");
	redirect('back/register');
		}else{
	$data_sapi = array(
			'kode_sapi' => $this->input->post('kode_sapi'),
			'nama_sapi' => $this->input->post('nama_sapi'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'id_user' => $this->input->post('id_user')
			);
//print_r($data_user);exit;
	$this->M_sapi->tambah($data_sapi);
	$this->session->set_flashdata('sukses', "<div class=\"alert alert-info\" id=\"alert\"><i class=\"\"></i> Registrasi data sapi berhasil</div>");
	redirect('back/register');}}
	
	else {
		
			$id= $this->session->userdata('id'); 
			$this->form_validation->set_rules('tanggal_lahir','tanggal_lahir','required');
		if($this->form_validation->run() == false){
			$this->session->set_flashdata('sukses', "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"\"><strong>error!</strong><br></i> silahkan inputkan tanggal lahir</div>");
	redirect('back/register');
		}else {
			//print_r($_POST);exit;
		
	$data_sapi= array(
			'kode_sapi' => $this->input->post('kode_sapi'),
			'nama_sapi' => $this->input->post('nama_sapi'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'id_user' => $id
			);
//print_r($data_user);exit;
	$this->M_sapi->tambah($data_sapi);
	$this->session->set_flashdata('sukses', "<div class=\"alert alert-info\" id=\"alert\"><i class=\"\"></i> Registrasi data sapi berhasil</div>");
	redirect('back/register');}}
	}

	public function tambah_sapi_pemeriksaan()
	{
		//print_r($_POST);exit;
		$level= $this->session->userdata('level'); 
                                if($level==1){
		$this->form_validation->set_rules('id_user','id_user','required');
		if($this->form_validation->run() == false){
			$this->session->set_flashdata('sukses', "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"\"><strong>error!</strong><br></i> silahkan pilih user</div>");
	redirect('back/pemeriksaan');
		}else{
	$data_sapi = array(
			'kode_sapi' => $this->input->post('kode_sapi'),
			'nama_sapi' => $this->input->post('nama_sapi'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'id_user' => $this->input->post('id_user')
			);
//print_r($data_user);exit;
	$this->M_sapi->tambah($data_sapi);
	$this->session->set_flashdata('sukses', "<div class=\"alert alert-info\" id=\"alert\"><i class=\"\"></i> Registrasi data sapi berhasil</div>");
	redirect('back/pemeriksaan');}}
	
	else {
		
			$id= $this->session->userdata('id'); 
			//print_r($_POST);exit;
	$data_sapi = array(
			'kode_sapi' => $this->input->post('kode_sapi'),
			'nama_sapi' => $this->input->post('nama_sapi'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'id_user' => $id
			);
//print_r($data_user);exit;
	$this->M_sapi->tambah($data_sapi);
	$this->session->set_flashdata('sukses', "<div class=\"alert alert-info\" id=\"alert\"><i class=\"\"></i> Registrasi data sapi berhasil</div>");
	redirect('back/pemeriksaan');}
	}
	public function tambah_user()
	{
		//print_r($_POST);exit;
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required');
		if($this->form_validation->run() == false){
			$this->session->set_flashdata('sukses', "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"\"><strong>error!</strong><br></i> Registrasi Gagal, Silahkan masukkan jenis kelamin username dan password</div>");
	redirect('back/register/register_user');
		}else{
			$data_cari = array(
			'username' => $this->input->post('username'),
			);
		$cek = $this->M_user->get_cari_username1($data_cari);
if ($cek > 0){
			$this->session->set_flashdata('sukses', "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"><strong>error!</strong><br></i> Registrasi Gagal, username anda sudah ada</div>");
	redirect('back/register/register_user');
		}else{
	$data_user = array(
			'kode_pendaftaran' => $this->input->post('kode_pendaftaran'),
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'id_level' => $this->input->post('id_level')
			);
//print_r($data_user);exit;
	$this->M_user->tambah($data_user);
	$this->session->set_flashdata('sukses', "<div class=\"alert alert-info\" id=\"alert\"><i class=\"\"></i> Registrasi Berhasil, Silahkan login Untuk melakukan pemeriksaan</div>");
	redirect('back/register/register_user');}}

	
	}
}
