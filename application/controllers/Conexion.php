<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conexion extends CI_Controller 
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
    
    //Función para ingresar
    public function entrar()
    {        
        $usuario = $this->input->post("txtusuario");
        $clave = $this->input->post("txtclave");
        $res = $this->Usuarios_model->entrar($usuario, sha1($clave));
       
        if(!$res)
        {
            $this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
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
    
    //Función para cerrar sesión
    public function desconectar()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
