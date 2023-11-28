<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();		
        $this->load->model('Mapi');
    }
	public function index(){
		$data["data"] = $this->Mapi->data();
		$this->load->view('basis', $data);
	}

    public function tambah(){
        $data = array(
            'NIK' => $this->input->post('nik'),
            'Nama' => $this->input->post('nama'),
            'Alamat' => $this->input->post('alamat'),
            'TTL' => $this->input->post('ttl'),
            'Pendidikan' => $this->input->post('pendidikan'),
            'Status' => $this->input->post('status'),
            'DepartemenID' => $this->input->post('DepartementID'),
            'Level' => $this->input->post('level'),
            'Grade' => $this->input->post('grade'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
        );
    $this->db->insert('karyawan', $data);
    redirect('dashboard');
    }

    public function edit(){
        $data = array(
            'NIK' => $this->input->post('nik'),
            'Nama' => $this->input->post('nama'),
            'Alamat' => $this->input->post('alamat'),
            'TTL' => $this->input->post('ttl'),
            'Pendidikan' => $this->input->post('pendidikan'),
            'Status' => $this->input->post('status'),
            'DepartemenID' => $this->input->post('DepartementID'),
            'Level' => $this->input->post('level'),
            'Grade' => $this->input->post('grade'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
    );
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('karyawan', $data);
    redirect('dashboard');
    }

    public function hapus($id){
    $this->db->delete('karyawan', array('id' => $id));
    redirect('dashboard');
    }
}
