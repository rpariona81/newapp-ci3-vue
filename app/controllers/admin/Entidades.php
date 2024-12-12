<?php

class Entidades extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		//$this->load->helper('security');
		$this->load->model('User_eloquent');
		$this->load->model('Entidad_eloquent');
		$this->load->model('Roleuser_eloquent');
	}


	public function index()
	{
		$this->data['info'] = 'Bienvenido(a) ' . $this->session->userdata('user_login');
		//$this->data['records'] = Entidad_eloquent::all();
		$this->data['records'] = Entidad_eloquent::getDirectorioEntidades();
		$this->render('admin/entidades/index');
	}
}
