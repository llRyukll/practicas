<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller1 extends CI_Controller {
	public function __constructor(){
		parent::__constructor();
		$this->load->model("formulario_modelo");
		$this->load->helper('url');
	}
    public function call()
	{
		$this->load->view('primera_vista');
	}
	public function per()
	{
		$this->load->view('form_personas');
	}
	public function emp()
	{
		$this->load->view('form_empleos');
	}	
	public function formulario()
	{
		$this->load->view('formulario');
	}
	public function mostrarEmp()
	{
		$this->load->model("formulario_modelo");
		$SelectEmp = $this->formulario_modelo->selectEmp();
		$this->load->view('mostrar_empleos',compact("SelectEmp"));
	}
	public function registrarEmp(){
		$this->load->model("formulario_modelo");
		$empresa = $_POST["empresa"];
		$tiempo = $_POST["tiempo"];
		$direccion = $_POST["direccion"];
		$this->formulario_modelo->registrarEmp($empresa, $tiempo, $direccion);
		redirect('empleos');
	}
	public function deleteEmp($id_empleos)
	{
		$this->load->model("formulario_modelo");
		$this->formulario_modelo->deleteEmp($id_empleos);
		redirect('mostrarEmp');
	}

	//Personas
	public function mostrarPer()
	{
		$this->load->model("formulario_modelo");
		$SelectPer = $this->formulario_modelo->selectPer();
		$this->load->view('mostrar_personas',compact("SelectPer"));
	}
	public function registrarper()
	{
		$this->load->model("formulario_modelo");
		$persona = $_POST["nombre"];
		$genero = $_POST["genero"];
		$edad = $_POST["edad"];
		$direccion = $_POST["direccion"];
		$this->formulario_modelo->registrarPer($persona, $genero, $edad, $direccion);
		redirect('personas');
	}
	public function deletePer($id_personas)
	{
		$this->load->model("formulario_modelo");
		$this->formulario_modelo->deletePer($id_personas);
		redirect('mostrarPer');
	}


}
?>