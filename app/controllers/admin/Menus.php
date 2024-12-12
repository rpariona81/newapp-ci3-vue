<?php

class Menus extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		//$this->load->helper('security');
		$this->load->model('Menu_eloquent');
	}


    public function index(){
        $this->data['info'] = 'Bienvenido(a) '.$this->session->userdata('user_login');
        $this->data['records'] = Menu_Eloquent::all();
        $this->render('admin/menus/index');

    }

    /*public function index(){
        //$this->render(NULL,'json');
        $this->data['info'] = 'Bienvenido(a) '.$this->session->userdata('user_login');
        //$this->render('admin/dashboard','admin');
        $this->render('admin/dashboard');
        $guard_name = $this->uri->segment(1);
        $controller = $this->uri->segment(2);
        $action = $this->uri->segment(3);
        $url = $guard_name . "/" . $controller . "/" . $action;
        header('Content-Type: Application/json');
        echo $guard_name.'<br>';
        echo $controller.'<br>';
        echo $action.'<br>';
        echo $url.'<br>';
		echo json_encode($this->session->all_userdata());
    
    }*/

}
