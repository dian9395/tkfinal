<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function GetSepeda($where=""){
		$data = $this->db->query('select * from sepeda'.$where);
		return $data->result_array();
	}

	public function Cek($ktp){
		$q1 = $this->db->query('select * from petugas where ktp ='.$ktp);
		$q2 = $this->db->query('select * from anggota where ktp ='.$ktp);
		$q3 = $this->db->query('select * from person where ktp ='.$ktp);

		if ($q1->num_rows() > 0){
			return 'petugas';
		} else if ($q2->num_rows() > 0){
			return 'anggota';
		} else if ($q3->num_rows() > 0){
			return 'admin';
		} else {
			return NULL;
		}
	}

	public function GetRiwayatTransaksi($ktp){
		$data = $this->db->query('SELECT * FROM anggota A, transaksi T 
		WHERE A.no_kartu=T.no_kartu_anggota AND A.ktp='.$ktp);
		return $data->result_array();

	}

	public function GetLaporan($where=""){
		$data = $this->db->query('select * from laporan L,anggota A,person P, peminjaman PM
		where L.no_kartu_anggota=A.no_kartu AND A.ktp=P.ktp 
		AND PM.no_kartu_anggota=L.no_kartu_anggota '.$where);
		return $data->result_array();
	}

	public function GetPeminjaman($where=""){
		$data = $this->db->query('select * from peminjaman'.$where);
		return $data->result_array();
	}

	public function GetPeminjamanAnggota($wher=""){
		$data = $this->db->query('select * from peminjaman'.$$where);
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

	public function GetNamaPengguna($ktp){
		$data = $this->db->query('SELECT nama FROM person WHERE ktp='.$ktp);
		return $data->result_array();
	}

	public function GetSaldo($ktp){
		$data = $this->db->query('SELECT saldo FROM anggota WHERE ktp='.$ktp);
		return $data->result_array();
	}

	public function GetNomorKartu($ktp){
		$data = $this->db->query('SELECT no_kartu FROM anggota WHERE ktp='.$ktp);
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

	public function CekKTP($where=""){
		$data = $this->db->query('select ktp from person '.$where);
		return $data;
	}

	public function CekEmail($where=""){
		$data = $this->db->query('select email from person '.$where);
		return $data;
	}
	
	public function UpdateData($tabelName,$data,$where){
		$res=$this->db->update($tabelName,$data,$where);
		return $res;
	}
	
	public function DeleteData($tabelName,$where){
		$res=$this->db->delete($tabelName,$where);
		return $res;
	}

	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
	// public function GetNama(){
	// 	$data = $this->db->query('SELECT * FROM `person` INNER JOIN petugas WHERE person.ktp = petugas.ktp');
	// 	return $data->result_array();
	// }

	public function GetNama(){
		$data = $this->db->query('SELECT * FROM person, petugas WHERE person.ktp = petugas.ktp');
		return $data->result_array();
	}

	public function GetIdstasiun(){
		$data = $this->db->query('SELECT id_stasiun, nama FROM stasiun');
		return $data->result_array();
	}

	public function GetEditpen($where=""){
		$data = $this->db->query('SELECT * FROM penugasan '.$where);
		return $data->result_array();
	}

	public function GetIdsta2(){
		$data = $this->db->query('SELECT id_stasiun, nama FROM stasiun');
		return $data->result_array();
	}

	public function GetEditacara($where=""){
		$data = $this->db->query('select * from acara '.$where);
		return $data->result_array();
	}

	public function CekStartdt($where=""){
		$data = $this->db->query('select start_datetime from penugasan '.$where);
		return $data;
	}

	public function CekEndtdt($where=""){
		$data = $this->db->query('select end_datetime from penugasan '.$where);
		return $data;
	}
}
?>

