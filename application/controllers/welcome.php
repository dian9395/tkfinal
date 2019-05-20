<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data=$this->mymodel->GetMahasiswa();		
		$this->load->view('tabel',array('data'=>$data));
	}
	

	public function insert (){
		$res=$this->mymodel->InsertData('mahasiswa', array(
		"nim"=>"112948192",
		"nama"=>"Amel",
		"alamat"=>"Surabaya"));
		if($res>=1){
			echo "<h2>Insert Data Sukses!!</h2>";
		}
		else {echo "<h2>Insert Data Gagal!!</h2>";}
	}
	
	public function update (){
		$res=$this->mymodel->UpdateData('mahasiswa', array(
		"alamat"=>"Tangerang"), array ('nim'=>"112948192"));
		if($res>=1){
			echo "<h2>Update Data Sukses!!</h2>";
		}
		else {echo "<h2>Update Data Gagal!!</h2>";}
	}
	
	public function delete (){
		$res=$this->mymodel->DeleteData('mahasiswa', array ('nim'=>"112948192"));
		if($res>=1){
			echo "<h2>Delete Data Sukses!!</h2>";
		}
		else {echo "<h2>Delete Data Gagal!!</h2>";}
		
	}

	public function panggil(){
		$data=$this->db->query("select*from mahasiswa");
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/
		echo "Jumlah data = ".$data->num_rows()."<br>";
		$row=$data->row();
		echo "No. Induk = ".$row->nim."<br>";
		echo "Nama = ".$row->nama."<br>";
		echo "Alamat = ".$row->Alamat."<br>";
		/*foreach($data->result_array() as $row){
			echo "No. Induk : ".$row['nim']."<br>";
			echo "Nama : ".$row['nama']."<br>";
			echo "Alamat : ".$row['Alamat']."<br>";
			echo "<hr>";
		}*/
	}
}
?>

