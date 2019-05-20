<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dbs extends CI_Controller {
	public function index(){
		//$data=$this->mymodel->GetMahasiswa();		
		//$this->load->view('index.php');
		//$data=$this->mymodel->GetMahasiswa();		
		$this->load->view('index.php');
	}

	public function add_data() {
		//echo "<h2>Tambah Data</h2>";
		$this->load->view('form_add');
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

	public function edit_data($nim){
		$mhs=$this->mymodel->GetMahasiswa("where nim = '$nim'");
		$data=array(
			"nim"=>$mhs[0]['nim'],
			"nama"=>$mhs[0]['nama'],
			"Alamat"=>$mhs[0]['Alamat']
		);
		$this->load->view('form_edit', $data);
	}
	
	public function do_delete($nim){
		//echo "Delete nim : ".$nim;
		$where=array('nim'=>$nim);
		$res=$this->mymodel->DeleteData('mahasiswa',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete Data Sukses');
			redirect('dbs/index');
		}
		else {
			echo "<h2>Delete data gagal</h2>";
		}
	}

	public function do_update() {
		$nim=$_POST['nim'];
		$nama=$_POST['nama'];
		$alamat=$_POST['Alamat'];
		$data_update=array(
			'nama'=>$nama,
			'Alamat'=>$alamat
		);
		$where=array('nim'=>$nim);
		$res=$this->mymodel->UpdateData('mahasiswa', $data_update, $where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Update Data Sukses');
			redirect('dbs/index');
			
		}
		else {
			echo "<h2>Insert data gagal</h2>";
		}

	}

	public function acara(){
		$this->load->view('acara.php');
	}

	public function daftar_acara_admin(){
		$this->load->view('daftar_acara_admin.php');
	}

	public function daftar_acara_anggota(){
		$this->load->view('daftar_acara_anggota.php');
	}

	public function daftar_acara_petugas(){
		$this->load->view('daftar_acara_petugas.php');
	}

	public function daftar_laporan_admin(){
		$data=$this->mymodel->GetLaporan();		
		$this->load->view('admin/daftar_laporan_admin.php',array('data'=>$data));
	}

	public function daftar_laporan_petugas(){
		$data=$this->mymodel->GetLaporan();		
		$this->load->view('daftar_laporan_petugas.php',array('data'=>$data));
	}

	public function daftar_peminjaman (){
		$data=$this->mymodel->GetPeminjaman();		
		$this->load->view('daftar_peminjaman.php',array('data'=>$data));
	}

	public function daftar_penugasan_admin(){
		$this->load->view('daftar_penugasan_admin.php');
	}

	public function daftar_penugasan_petugas(){
		$data=$this->mymodel->GetPenugasan();		
		$this->load->view('daftar_penugasan_petugas',array('data'=>$data));
	}

	public function daftar_sepeda_admin(){
		$data=$this->mymodel->GetSepeda();		
		$this->load->view('daftar_sepeda_admin.php',array('data'=>$data));
	}

	public function daftar_sepeda_anggota(){
		$data=$this->mymodel->GetSepeda();		
		$this->load->view('daftar_sepeda_anggota.php',array('data'=>$data));
	}

	public function login (){
		$this->load->view('login.php');
	}

	public function pendaftaran (){
		$this->load->view('pendaftaran.php');
	}

	public function penugasan (){
		$this->load->view('penugasan.php');
	}

	public function riwayat_transaksi(){
		$data=$this->mymodel->GetRiwayatTransaksi();		
		$this->load->view('riwayat_transaksi.php',array('data'=>$data));
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

