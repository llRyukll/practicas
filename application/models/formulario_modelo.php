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
        //$sql = $this->db->query("INSERT INTO empleos(nombre_empleos,direccion_empleos,Tiempo_servicio) values('$empresa','$direccion','$tiempo')");
        $data = array('nombre_empleos' => $empresa ,
                       'direccion_empleos' => $direccion ,
                       'Tiempo_servicio' => $tiempo
                    );
        $this->db->set($data);
        $this->db->insert('empleos'); 

    }
    public function selectEmp(){
        //$sql = $this->db->query("SELECT * FROM empleos")->result();
        //return $sql;
        $query = $this->db->get('empleos');
        return $query->result();
    }

    public function deleteEmp($id){
        $this->db->where('id_empleos', $id);
        $this->db->delete('empleos'); 
        //$this->db->delete('empleos',['id_empleos'=>$id])
    }

    public function updateEmp($id){
        $data = array( 'nombre_empleos' => $empresa ,
                       'direccion_empleos' => $direccion ,
                       'Tiempo_servicio' => $tiempo
            );

        $this->db->where('id_empleos', $id);
        $this->db->update('empleos', $data); 
    }


    //CRUD Personas
    public function registrarPer($persona, $genero, $edad, $direccion){
    $data = array('nombre_personas' => $persona ,
                   'genero_personas' => $genero ,
                   'edad_personas' => $edad,
                   'direccion_personas' => $direccion
                );
    $this->db->set($data);
    $this->db->insert('Personas'); 
    

    }
    public function selectPer(){
        //$sql = $this->db->query("SELECT * FROM empleos")->result();
        //return $sql;
        $query = $this->db->get('personas');
        return $query->result();
    }

    public function deletePer($id){
        $this->db->where('id_personas', $id);
        $this->db->delete('personas'); 
    }

    public function updatePer($id){
        $data = array( 'nombre_personas' => $personas ,
                       'genero_personas' => $genero ,
                       'edad_personas' => $edad,
                        'direccion_personas' => $direccion
            );
        $this->db->where('id_personas', $id);
        $this->db->update('personas', $data); 
    }
}
?>