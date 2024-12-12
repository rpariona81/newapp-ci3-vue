<?php

class Institutos extends MY_Controller{

    public function __construct()
	{
		parent::__construct();
		//Do your magic here
		//$this->load->helper('security');
		$this->load->model('User_eloquent');
		$this->load->model('Role_eloquent');
		$this->load->model('Instituto_eloquent');
		$this->load->model('Marcoinstituto_eloquent');
				
	}


    public function index(){
        $this->data['info'] = 'Bienvenido(a) '.$this->session->userdata('user_login');
        $this->data['records'] = Instituto_Eloquent::getCronogramaInstitutos();
        $this->render('admin/institutos/index');
    }



}
