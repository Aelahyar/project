<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mlogin extends CI_Model {
	public function login($u, $p){
		$sql = "SELECT * FROM karyawan WHERE (id = '$u' OR username = '$u') AND password = '$p' AND status = 'Aktif'";
		$querySQL = $this->db->query($sql);
		if($querySQL){
			return $querySQL->row();
		}else{return 0;}
	}

	public function update_password($id, $pass){
		$sql = "UPDATE karyawan SET password = '$pass' WHERE id = '$id'";
		$querySQL = $this->db->query($sql);
        if($querySQL){return "1";}
		else{return "0";}
	}

	public function ambiluser(){
		$ayy = dekripsi($this->encryption->decrypt(base64_decode($this->session->userdata(sesi))));
		$dtl = explode("|", $ayy);
		return $dtl[0];
	}
}