<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    public function index(){
        if (isset($_POST['submit'])){
        $u = $this->input->post("username");
        // $p = md5(base64_encode(enkripsi($this->input->post("password"))));
        $p = $this->input->post("password");
        $this->load->model('Mlogin');
        $stlogin = $this->Mlogin->login($u, $p);
        if($stlogin){
            // foreach ($stlogin as $sl){
                $id = $stlogin->id;
                $pas = $stlogin->password;
            // }
            // $data_session = base64_encode($this->encryption->encrypt(enkripsi($id."|".$pas)));
            $userdata=array(
                'id' => $stlogin->id,
                'role' => $stlogin->DepartemenID,
                'nama' => $stlogin->Nama,
                'namaS' => $stlogin->Status
            );
            $this->session->set_userdata($userdata);
            echo base64_encode("1");
            redirect('Dashboard');
        }else{
            redirect('login');
        }}else{
            $this->load->view("log");
        }
    }

    public function login(){
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}
