<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
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
		//$this->load->helper('security');
		$this->load->model('User_eloquent');
		$this->load->model('Role_eloquent');
		$this->load->model('Roleuser_eloquent');
	}

	public function index()
	{
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


		//$this->load->view('admin/templateAdmin');
		//$this->load->model('User_model');
		//$data['contenido'] = 'admin/users/index';
		//$data['users'] = User_Eloquent::getUsersRoles();
		/*$data['users'] = $this->User_model->get();
		print_r(json_encode($data));
		return;*/
		//$this->load->view('admin/templateAdmin', $data);
	}

	public function show($id)
	{
		//$this->load->view('welcome_message');
		//$this->load->model('User_model');
		/*$data['contenido'] = 'admin/users/edit';
		$data['user'] = User_Eloquent::getUser($id);
		$data['roles'] = Role_Eloquent::getRoleOpciones();
		$this->load->view('admin/templateAdmin', $data);*/

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

	public function edit($id)
	{
		//$this->load->view('welcome_message');
		//$this->load->model('User_model');
		//$request = array('id'=>1);
		//$data['users'] = $this->User_model->get();
		/*$data['user'] = User_Eloquent::getUser($id);
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

	public function update()
	{
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
		/*
		$request = $this->security->xss_clean($this->input->post());
		$result = User_Eloquent::updateUser($request);
		redirect('/admin/users');*/
	}

	public function inactive($id)
	{
		//$this->load->view('welcome_message');
		//$this->load->model('User_model');
		//$request = array('id'=>1);
		//$data['users'] = $this->User_model->get();
		/*$data['user'] = User_Eloquent::getUser($id);
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

	public function active($id)
	{
		//$this->load->view('welcome_message');
		//$this->load->model('User_model');
		//$request = array('id'=>1);
		//$data['users'] = $this->User_model->get();
		/*$data['user'] = User_Eloquent::getUser($id);
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
