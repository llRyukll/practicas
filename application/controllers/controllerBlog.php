<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controllerBlog extends CI_Controller {
	public function __constructor(){
		parent::__constructor();
		$this->load->model("blog_model");
		$this->load->helper('url');
		$this->load->library('pagination');
	}
    public function view_plantilla()
	{
		$this->load->view('blogplantilla');
	}

    public function view_inicio()
	{
		$this->load->view('inicio_blog');
	}

	public function mostrar_noticias()
	{
		$this->load->model("blog_model");
		$noticias = $this->blog_model->get_noticias();
		$this->load->view('inicio_blog',compact("noticias"));
	}
	public function mostrarEmp()
	{
		$this->load->model("formulario_modelo");
		$SelectEmp = $this->formulario_modelo->selectEmp();
		$this->load->view('mostrar_empleos',compact("SelectEmp"));
	}
	public function modal(){
		$this->load->view("modal");
	}
}?>