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
		// ambil data petugas
		$data=$this->mymodel->GetNama();
		$d1=$this->mymodel->GetIdstasiun();		
		$this->load->view('form_add_penugasan',array('data' =>$data, 'd1' => $d1));
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
			$this->session->set_flashdata('pesan','Tambah Data Sukses!!');
			redirect('dbs/daftar_penugasan_admin');
		}else{
			echo "<h2>Insert Data Gagal</h2>";
		}
	}

	public function do_login(){
		$username = $this->input->post('noktp');
		$password = $this->input->post('email');
		$where = array(
			'ktp' => $username,
			'email' =>$password
			);
		$cek = $this->mymodel->cek_login("person",$where)->num_rows();
		if($cek == 1){
			$cekR = $this->mymodel->Cek($username);
			//print_r($cek);die;
			if($cekR == 'anggota'){
				// code redirect anggota
				$nama = $this->mymodel->GetNamaPengguna($username);
				$saldo = $this->mymodel->GetSaldo($username);
				$nokartu = $this->mymodel->GetNomorKartu($username);
				$data_session = array(
					'ktp' => $username,
					'nama' => 'Hi '.$nama[0]['nama'],
					'saldo' => $saldo[0]['saldo'],
					'no_kartu' => $nokartu[0]['no_kartu']
					);
				
				//$role = $this->mymodel->CekRole($username);
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('pesan','"'.$this->session->userdata('nama').'"');
				redirect('dbs/daftar_sepeda_anggota');
			} else if ($cekR == 'petugas'){
				// session buat petugas
				$nama = $this->mymodel->GetNamaPengguna($username);
				$data_session = array(
					'ktp' => $username,
					'nama' => 'Hi '.$nama[0]['nama'],
					);
				
				//$role = $this->mymodel->CekRole($username);
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('pesan','"'.$this->session->userdata('nama').'"');
				
				//code redirect petugas
				redirect('dbs/daftar_penugasan_petugas');
			} else if ($cekR == 'admin'){
				// session buat admin
				$nama = $this->mymodel->GetNamaPengguna($username);
				$data_session = array(
					'ktp' => $username,
					'nama' => 'Hi '.$nama[0]['nama'],
					);
				
				//$role = $this->mymodel->CekRole($username);
				$this->session->set_userdata($data_session);
				$this->session->set_flashdata('pesan','"'.$this->session->userdata('nama').'"');
				
				//code redirect petugas
				redirect('dbs/daftar_peminjaman_admin');
			} else {
				redirect('index');
			}				
		} else {
			echo "Nomor KTP dan email salah. Silakan ulangi lagi.";
		}
	}


	public function do_topup()
	{
		$nominal = $_POST['nominal'];	
		$no_kartu_anggota = $this->session->userdata('no_kartu');
		//$now = new DateTime();
		date_default_timezone_set('Asia/Jakarta');
		$date_time = date("Y-m-d H:i:s"); 
		$jenis= "top up";			
		$data_insert = array(
			'no_kartu_anggota' => $no_kartu_anggota,
			'date_time' => $date_time,
			'jenis' => $jenis,
			'nominal' => $nominal
		);
		$res = $this->mymodel->InsertData('transaksi',$data_insert);
		if($res>=1){
			$this->session->set_flashdata('pesan','Top up berhasil!');
			redirect('dbs/riwayat_transaksi');
		}else{
			echo "h2>Insert Data Gagal</h2>";
		}
	}

	public function edit_data_penugasan($ktp){
		$png = $this->mymodel->GetEditpen("where ktp = '$ktp'");
		$data = array(
			"ktp" => $png[0]['ktp'],
			"start_datetime" => $png[0]['start_datetime'],
			"end_datetime" => $png[0]['end_datetime'],
			"id_stasiun" => $png[0]['id_stasiun'],
		);
		$this->load->view('form_edit_penugasan',$data);
	}

	public function do_update_penugasan(){
		$ktp = $_POST['ktp'];
		$start_datetime = $_POST['start_datetime'];
		$end_datetime = $_POST['end_datetime'];
		$id_stasiun = $_POST['id_stasiun'];
		$data_update = array(
			'end_datetime' => $end_datetime,
			'id_stasiun' => $id_stasiun
		);
		$where = array('ktp' => $ktp, 'start_datetime' => $start_datetime);
		$res = $this->mymodel->UpdateData('penugasan',$data_update,$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Update Data Sukses!!');
			redirect('dbs/daftar_penugasan_admin');
		}
		redirect('dbs/riwayat_transaksi');
	}

	public function do_delete_penugasan($ktp){
		$where = array('ktp' => $ktp);
		$res = $this->mymodel->DeleteData('penugasan',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete Data Sukses!!');
			redirect('dbs/daftar_penugasan_admin');
		}
	}
 
	public function add_data_acara()
	{	
		// $s=$this->mymodel->GetIdsta2();		
		// $this->load->view('form_add_acara',array('data' =>$data, 's' => $s));
		$this->load->view('form_add_acara');

	}

	function generateRandomString($length = 10) {
		    $characters = '0123456789';
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    return $randomString;
		}

	public function do_insert_acara()
	{
		$judul = $_POST['judul'];
		$deskripsi = $_POST['deskripsi'];
		$is_free = $_POST['is_free'];
		$tgl_mulai = $_POST['tgl_mulai'];
		$tgl_akhir = $_POST['tgl_akhir'];
		// $id_stasiun = $_POST['id_stasiun'];
		$randomString = $this->generateRandomString();
		$data_insert = array(
			'id_acara' => $randomString,
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'is_free' => $is_free,
			'tgl_mulai' => $tgl_mulai,
			'tgl_akhir' => $tgl_akhir
			// 'id_stasiun' => $id_stasiun,
		);
		$res = $this->mymodel->InsertData('acara',$data_insert);
		if($res>=1){
			$this->session->set_flashdata('pesan','Tambah Data Sukses!!');
			redirect('dbs/daftar_acara_admin');
		}else{
			echo "h2>Insert Data Gagal</h2>";
		}
	}

	public function edit_data_acara($judul){
		$acr = $this->mymodel->GetAcara("where judul = '$judul'");
		$data = array(
			"judul" => $acr[0]['judul'],
			"deskripsi" => $acr[0]['deskripsi'],
			"is_free" => $acr[0]['is_free'],
			"tgl_mulai" => $acr[0]['tgl_mulai'],
			"tgl_akhir" => $acr[0]['tgl_akhir'],
			// "id_stasiun" => $acr[0]['id_stasiun'],
			);
		$this->load->view('form_edit_acara',$data);
	}

	public function do_update_acara(){
		$judul = $_POST['judul'];
		$deskripsi = $_POST['deskripsi'];
		$is_free = $_POST['is_free'];
		$tgl_mulai = $_POST['tgl_mulai'];
		$tgl_akhir= $_POST['tgl_akhir'];
		// $id_stasiun= $_POST['id_stasiun'];
		$data_update = array(
			'deskripsi' => $deskripsi,
			'is_free' => $is_free,
			'tgl_mulai' => $tgl_mulai,
			'tgl_akhir' => $tgl_akhir,
			// 'id_stasiun' => $id_stasiun,
		);
		$where =  array('judul' => $judul);
		$res = $this->mymodel->UpdateData('acara',$data_update,$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Update Data Sukses!!');
			redirect('dbs/daftar_acara_admin');
		}
	}

	public function do_delete_acara($judul){
		$where = array('judul' => $judul);
		$res = $this->mymodel->DeleteData('acara',$where);
		if($res>=1){
			$this->session->set_flashdata('pesan','Delete Data Sukses!!');
			redirect('dbs/daftar_acara_admin');
		}
	}

	public function acara(){
		$this->load->view('acara.php');
	}

	public function daftar_acara_admin(){
		$data=$this->mymodel->GetAcara();	
		$this->load->view('admin/daftar_acara_admin.php',array('data'=>$data));
	}

	public function daftar_acara_anggota(){
		$data=$this->mymodel->GetAcara();	
		$this->load->view('anggota/daftar_acara_anggota.php',array('data'=>$data));
	}

	public function daftar_acara_petugas(){
		$data=$this->mymodel->GetAcara();	
		$this->load->view('petugas/daftar_acara_petugas.php',array('data'=>$data));
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

	public function daftar_peminjaman_anggota(){
		$data=$this->mymodel->GetPeminjaman();		
		$this->load->view('anggota/daftar_peminjaman_anggota.php',array('data'=>$data));
	}

	public function login (){
		$this->load->view('login');
	}
	
	
	public function logout(){
		
		$array_items = array('ktp', 'nama', 'saldo', 'no_kartu');
		$this->session->unset_userdata($array_items);
		session_destroy();
		redirect('dbs/index');
	}

	/*public function GetSaldo(){
		
		$username = $this->input->post('noktp');
		$password = $this->input->post('email');
		$where = array(
			'ktp' => $username,
			'email' =>$password
			);
		$cek = $this->mymodel->cek_login("person",$where)->num_rows();
		if($cek == 1){
			$nama = $this->mymodel->GetNamaAnggota($username);
			$data_session = array(
				'ktp' => $username,
				'nama' => 'Hi '.$nama[0]['nama']
				);
		redirect('dbs/index');
		}*/

	public function pendaftaran (){
		$this->load->view('pendaftaran.php');
	}

	public function do_pendaftaran (){
		$ktp =$this->input->post('ktp');		
		$nama =$this->input->post('nama');
		$email =$this->input->post('email'); 
		$tgl_lahir = $this->input->post('tgl_lahir');	
		$no_telp = $this->input->post('no_telp');;	
		$alamat= $this->input->post('alamat');	
		$role=$this->input->post('role');
		$data_insert = array(
			'ktp' => $ktp,
			'nama' => $nama,
			'email' => $email,
			'tgl_lahir' => $tgl_lahir,
			'no_telp' => $no_telp,
			'alamat' => $alamat
		);
		$randomString = $this->generateRandomString();
		$points=0;
		$saldo=0;
		$data_insert_anggota = array(
			'ktp' => $ktp,
			'no_kartu' => $randomString,
			'points' => $points,
			'saldo' => $saldo
		);	

		$gaji=30000;

		$data_insert_petugas = array(
			'ktp' => $ktp,
			'gaji' => $gaji
		);	
		
		$data1 = $this->mymodel->CekKTP("where ktp = '$ktp'")->num_rows();
		$data2 = $this->mymodel->CekEmail("where email = '$email'")->num_rows();
		//print($data1. ' ||||||||||||||||||||||| '. $data2); die;
				
		//$role = $this->mymodel->CekRole($username);
			$data_session = array(
					'nama' => 'Hi '.$nama.'. Selamat registrasi berhasil'
					
					);

			$this->session->set_userdata($data_session);
		
			if($data1>=1){
				echo "ktp sudah terdaftar";
			} 
			else if($data2>=1){
				echo "email sudah terdaftar";
			} 
			else if ($role=='Anggota'){
				$res1 = $this->mymodel->InsertData('person',$data_insert);
				$res2 = $this->mymodel->InsertData('anggota',$data_insert_anggota);
				//$this->session->set_flashdata('pesan','Registrasi berhasil!', $nama);
				$this->session->set_flashdata('pesan','"'.$this->session->userdata('nama').'"');
				
				redirect('dbs/daftar_sepeda_anggota');
			}  
			else if ($role=='Petugas'){
				$res1 = $this->mymodel->InsertData('person',$data_insert);
				$res2 = $this->mymodel->InsertData('petugas',$data_insert_petugas);
				//$this->session->set_flashdata('pesan','Registrasi berhasil!', $nama);
				
				$this->session->set_flashdata('pesan','"'.$this->session->userdata('nama').'"');
				// //print_r($data_insert_anggota); 
				// print_r($data_insert_petugas); 
				// die;
				redirect('dbs/daftar_penugasan_petugas');
			} else { redirect('index');}
			
		
	}

	public function riwayat_transaksi(){
		$ktp = $this->session->userdata('ktp');
		$data=$this->mymodel->GetRiwayatTransaksi($ktp);		
		$this->load->view('anggota/riwayat_transaksi.php',array('data'=>$data));
	}

	public function topup(){
		$this->load->view('anggota/topup.php');
	}

	public function update_acara(){
		$this->load->view('update_acara.php');
	}

	public function update_penugasan(){
		$this->load->view('update_acara.php');
	}

}
?>

