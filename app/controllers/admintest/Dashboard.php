<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		//$this->load->model('User');
		$this->load->model('User_eloquent');
	}

	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->model('User_model');
		//$data['users'] = User_Eloquent::all();
		/*$data['users'] = User_Eloquent::getUsersRoles();
		//$data['users'] = $this->User_model->get();
		print_r(json_encode($data));
		return;*/

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
	}
}
