<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mapi extends CI_Model {
	public function data(){
		$sql = "SELECT a.*, b.NamaDepartemen FROM karyawan AS a LEFT JOIN departemen AS b ON a.DepartemenID = b.DepartemenID ORDER BY NIK";
		$querySQL = $this->db->query($sql);
		if($querySQL){return $querySQL->result();}
		else{return 0;}
	}

}