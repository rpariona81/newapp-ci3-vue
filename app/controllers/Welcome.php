<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
	public function index()
	{
		/*$newdata = array(
			'username'  => 'johndoe',
			'email'     => 'johndoe@some-site.com',
			'logged_in' => TRUE
		);

		$this->session->set_userdata($newdata);*/
		//$this->session->unset("userID");
		//$this->session->set_userdata("username","Jhon Doe");
		$this->load->view('welcome_message');
		/*$this->load->model('User_model');
		$data['users'] = User_model::all();
		print_r(json_encode($data));*/
	}

	public function hola()
	{
		print_r("Hola");
		phpinfo();
	}

	public function login()
	{
		$this->load->view('auth/login_view');
	}
}
