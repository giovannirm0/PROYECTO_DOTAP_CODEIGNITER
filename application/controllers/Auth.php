<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{   
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("Usuarios_model");
    }

    public function index()
    {
        if($this->session->userdata("login"))
        {
            redirect(base_url()."logueado");
        }else{
            $this->load->view('Login/FrmLoginAlumno');
        }                
        //$this->load->view('FrmTipoUsuario');
    }
    
    public function login()
    {
        
        $usuario = $this->input->post("txtusuario");
        $clave = $this->input->post("txtclave");
        $res = $this->Usuarios_model->login($usuario, sha1($clave));
       
        if(!$res)
        {
            //$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
            redirect(base_url());
        }else{
            $data = array(
                'id' => $res->id_usu,
                'nombre ' => $res->nombre_usu,
                'tipo' => $res->id_tipousu,
                'login' => TRUE                
            );
            $this->session->set_userdata($data);
            redirect(base_url()."logueado");
        }     
        redirect(base_url()."logueado");
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
