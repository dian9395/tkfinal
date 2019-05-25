<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function GetSepeda($where=""){
		$data = $this->db->query('select * from sepeda'.$where);
		return $data->result_array();
	}

	public function GetRiwayatTransaksi($where=""){
		$data = $this->db->query('select * from transaksi'.$where);
		return $data->result_array();
	}

	public function GetLaporan($where=""){
		$data = $this->db->query('select * from laporan'.$where);
		return $data->result_array();
	}

	public function GetPeminjaman($where=""){
		$data = $this->db->query('select * from peminjaman'.$where);
		return $data->result_array();
	}

	public function GetPenugasan($where=""){
		$data = $this->db->query('
			SELECT pen.ktp, pen.start_datetime, pen.id_stasiun, pen.end_datetime, per.nama, sta.nama AS namasta 
			FROM penugasan pen 
			JOIN person per ON pen.ktp = per.ktp 
			JOIN stasiun sta ON sta.id_stasiun = pen.id_stasiun 
			ORDER BY pen.ktp');
		return $data->result_array();
	}

	public function GetAcara($where=""){
		$data = $this->db->query('select * from acara '.$where);
		return $data->result_array();
	}
	
	public function InsertData($tabelName,$data){
		$res=$this->db->insert($tabelName,$data);
		return $res;
	}
	
	public function UpdateData($tabelName,$data,$where){
		$res=$this->db->update($tabelName,$data,$where);
		return $res;
	}
	
	public function DeleteData($tabelName,$where){
		$res=$this->db->delete($tabelName,$where);
		return $res;
	}

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	function GetNama(){
		$data = $this->db->query('SELECT * FROM `person` INNER JOIN petugas WHERE person.ktp = petugas.ktp');
		return $data->result_array();
	}
}
?>

