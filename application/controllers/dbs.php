<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbs extends CI_Controller {
	public function index(){
		//$data=$this->mymodel->GetMahasiswa();		
		//$this->load->view('index.php');
		//$data=$this->mymodel->GetMahasiswa();		
		$this->load->view('index');
	}

	public function add_data_penugasan()
	{
		$this->load->view('form_add_penugasan');
	}

	public function do_insert_penugasan()
	{
		$ktp = $_POST['ktp'];
		$start_datetime = $_POST['start_datetime'];
		$end_datetime = $_POST['end_datetime'];
		$id_stasiun = $_POST['id_stasiun'];
		$data_insert = array(
			'ktp' => $ktp,
			'start_datetime' => $start_datetime,
			'end_datetime' => $end_datetime,
			'id_stasiun' => $id_stasiun
		);
		$res = $this->mymodel->InsertData('penugasan',$data_insert);
		if($res>=1){
			redirect('dbs/daftar_penugasan_admin');
		}else{
			echo "h2>Insert Data Gagal</h2>";
		}
	}

	public function edit_data_penugasan($ktp){
		$png = $this->mymodel->GetPenugasan("where ktp = '$ktp'");
		$data = array(
			"ktp" => $ktp[0]['ktp'],
			"start_datetime" => $ktp[0]['start_datetime'],
			"end_datetime" => $ktp[0]['end_datetime'],
			"id_stasiun" => $ktp[0]['id_stasiun'],
			);
		$this->load->view('form_edit',$data);
	}

	public function do_update_penugasan(){
		$ktp = $_POST['ktp'];
		$start_datetime = $_POST['start_datetime'];
		$end_datetime = $_POST['end_datetime'];
		$id_stasiun = $_POST['id_stasiun'];
		$data_update = array(
			'start_datetime' => $start_datetime,
			'end_datetime' => $end_datetime,
			'id_stasiun' => $id_stasiun
		);
		$where =  array('ktp' => $ktp);
		$res = $this->mymodel->UpdateData('penugasan',$data_update,$where);
		if($res>=1){
			redirect('dbs/daftar_penugasan_admin');
		}
	}

	public function do_delete_penugasan($ktp){
		$where = array('ktp' => $ktp);
		$res = $this->mymodel->DeleteData('penugasan',$where);
		if($res>=1){
			redirect('dbs/daftar_penugasan_admin');
		}
	}

	public function add_data_acara()
	{
		$this->load->view('form_add_acara');
	}

	public function do_insert_acara()
	{
		$judul = $_POST['judul'];
		$deskripsi = $_POST['deskripsi'];
		$is_free = $_POST['is_free'];
		$tgl_mulai = $_POST['tgl_mulai'];
		$tgl_akhir = $_POST['tgl_akhir'];
		$id_stasiun = $_POST['id_stasiun'];
		$data_insert = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'is_free' => $is_free,
			'tgl_mulai' => $tgl_mulai,
			'tgl_akhir' => $tgl_akhir,
			'id_stasiun' => $id_stasiun,
		);
		$res = $this->mymodel->InsertData('acara',$data_insert);
		if($res>=1){
			redirect('dbs/daftar_acara_admin');
		}else{
			echo "h2>Insert Data Gagal</h2>";
		}
	}

	public function edit_data_acara($ktp){
		$png = $this->mymodel->GetAcara("where ktp = '$ktp'");
		$data = array(
			"ktp" => $ktp[0]['ktp'],
			"start_datetime" => $ktp[0]['start_datetime'],
			"end_datetime" => $ktp[0]['end_datetime'],
			"id_stasiun" => $ktp[0]['id_stasiun'],
			);
		$this->load->view('form_edit',$data);
	}

	public function do_update_acara(){
		$ktp = $_POST['ktp'];
		$start_datetime = $_POST['start_datetime'];
		$end_datetime = $_POST['end_datetime'];
		$id_stasiun = $_POST['id_stasiun'];
		$data_update = array(
			'start_datetime' => $start_datetime,
			'end_datetime' => $end_datetime,
			'id_stasiun' => $id_stasiun
		);
		$where =  array('ktp' => $ktp);
		$res = $this->mymodel->UpdateData('penugasan',$data_update,$where);
		if($res>=1){
			redirect('dbs/daftar_penugasan_admin');
		}
	}

	public function do_delete_acara($ktp){
		$where = array('ktp' => $ktp);
		$res = $this->mymodel->DeleteData('acara',$where);
		if($res>=1){
			redirect('dbs/daftar_acara_admin');
		}
	}

	public function topup_sbp() {
		$nom=$_POST['nominal'];
		$data_insert=array(
			'nominal'=>$nom,
		);
		$res=$this->mymodel->InsertData('transaksi', $data_insert);
		if($res>=1){
			$this->session->set_flashdata('pesan','Tambah Data Sukses');
			redirect('dbs/index');
			//echo "<h2>Insert data sukses</h2>";
		}
		else {
			echo "<h2>Insert data gagal</h2>";
		}
		/*echo "<pre>";
		print_r($_POST);
		echo "<pre>";*/
	}

	public function acara(){
		$this->load->view('acara.php');
	}

	public function daftar_acara_admin(){
		$data=$this->mymodel->GetAcara();	
		$this->load->view('admin/daftar_acara_admin.php',array('data'=>$data));
	}

	public function daftar_acara_anggota(){
		$this->load->view('anggota/daftar_acara_anggota.php');
	}

	public function daftar_acara_petugas(){
		$this->load->view('petugas/daftar_acara_petugas.php');
	}

	public function daftar_laporan_admin(){
		$data=$this->mymodel->GetLaporan();		
		$this->load->view('admin/daftar_laporan_admin.php',array('data'=>$data));
	}

	public function daftar_laporan_petugas(){
		$data=$this->mymodel->GetLaporan();		
		$this->load->view('petugas/daftar_laporan_petugas.php',array('data'=>$data));
	}

	public function daftar_peminjaman_admin (){
		$data=$this->mymodel->GetPeminjaman();		
		$this->load->view('admin/daftar_peminjaman_admin.php',array('data'=>$data));
	}

	public function daftar_penugasan_admin(){
		$data=$this->mymodel->GetPenugasan();	
		$this->load->view('admin/daftar_penugasan_admin.php',array('data'=>$data));
	}

	public function daftar_penugasan_petugas(){
		$data=$this->mymodel->GetPenugasan();		
		$this->load->view('petugas/daftar_penugasan_petugas.php',array('data'=>$data));
	}

	public function daftar_sepeda_admin(){
		$data=$this->mymodel->GetSepeda();		
		$this->load->view('admin/daftar_sepeda_admin.php',array('data'=>$data));
	}

	public function daftar_sepeda_anggota(){
		$data=$this->mymodel->GetSepeda();		
		$this->load->view('anggota/daftar_sepeda_anggota.php',array('data'=>$data));
	}

	public function login (){
		$this->load->view('login');
	}
	
	public function vlogin (){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('noktp');
		$password = $this->input->post('email');
		$where = array(
			'ktp' => $username,
			'email' =>$password
			);
		$cek = $this->mymodel->cek_login("person",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("dbs/daftar_peminjaman_admin"));

		}else{
			echo "Username dan password salah. Silakan ke halaman sebelumnya dan ulangi.";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('dbs/index'));
	}

	public function pendaftaran (){
		$this->load->view('pendaftaran.php');
	}

	public function penugasan (){
		$this->load->view('penugasan.php');
	}

	public function riwayat_transaksi(){
		$data=$this->mymodel->GetRiwayatTransaksi();		
		$this->load->view('anggota/riwayat_transaksi.php',array('data'=>$data));
	}

	public function topup(){
		$this->load->view('topup.php');
	}

	public function update_acara(){
		$this->load->view('update_acara.php');
	}

	public function update_penugasan(){
		$this->load->view('update_acara.php');
	}

	public function dt(){
		$this->load->view('cobadataTable.php');
	}

}
?>

