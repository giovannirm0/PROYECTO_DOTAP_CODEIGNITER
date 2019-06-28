<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
    public function login($usuario,$clave)
    {
	$this->db->where("NOMBRE_USU",$usuario);
	$this->db->where("CLAVE_USU",$clave);
        
        $resultados = $this->db->get("USUARIO");
        if($resultados->num_rows()>0)
        {
            return $resultados->row();
        }else{
            return false;
        }
    }
}
