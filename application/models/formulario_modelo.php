<?php
defined('BASEPATH') OR  exit('No direction script acces allowed');
class Formulario_modelo extends CI_Model 
{
     function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function registrarEmp($empresa, $tiempo, $direccion){
        $sql = $this->db->query("INSERT INTO empleos(nombre_empleos,direccion_empleos,Tiempo_servicio) values('$empresa','$direccion','$tiempo')");

    }
    public function selectEmp(){
        $sql = $this->db->query("SELECT * FROM empleos")->result();
        return $sql;

    }
    
}



?>