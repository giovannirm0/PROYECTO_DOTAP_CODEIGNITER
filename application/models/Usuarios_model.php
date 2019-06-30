<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
    public function entrar($usuario,$clave)
    {
	$this->db->where("nombre_usu",$usuario);
	$this->db->where("clave_usu",$clave);
        
        $resultados = $this->db->get("usuario");
        if($resultados->num_rows()>0)
        {
            return $resultados->row();
        }else{
            return false;
        }
    }
}
