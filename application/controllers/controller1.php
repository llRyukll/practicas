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
	}
	public function formulario()
	{
		$this->load->view('formulario');
	}
	public function recibidatos()
	{

	}
}
?>