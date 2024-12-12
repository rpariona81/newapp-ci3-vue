<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Entidad_eloquent');
		$this->form_validation->set_message('loginok', 'Usuario o clave incorrectos');
		$this->form_validation->set_message('Clave', 'Ingrese contraseña');
	}

	/*public function index()
	{
		$data['versionDB'] = $this->db->version();
		$data['content'] = 'home';
		$this->load->view('templates/guest', $data);
	}*/

	public function viewLogin()
	{
		//$this->load->view('auth/login');
		$this->load->view('example');
	}

	public function index()
	{
		//session_start();
		if ($this->session->userdata('user_guard')) {
			//print_r($datos);
			//echo "si hay sesion";
			redirect(base_url() . $this->session->userdata('user_guard') . '/index');
		} else {
			//echo "no hay sesion";
			//$this->login();
			//$this->load->view('auth/login');
			$this->viewLogin();
		}
		//$this->load->view('auth/login');
	}

	public function error404()
	{
		$this->load->view('auth/login');
	}

	public function login()
	{
		$login = $this->input->post('username');
		$password = $this->input->post('password');

		if ($login != NULL && $password != NULL) {

			$this->form_validation->set_rules('username', 'Usuario', 'required|callback_loginok');
			$this->form_validation->set_rules('password', 'Clave', 'required');
			//si el proceso falla mostramos errores
			if ($this->form_validation->run() == FALSE) {
				//$this->index();
				//$this->session->set_flashdata('error', $checkUser['error']);
				//$this->session->set_flashdata('error', 'Error de usuario o contraseña.');
				//redirect_back();
				$this->index();
				//redirect('/login');
				//return redirect_back();
				//en otro caso procesamos los datos
			} else {
				//redirect('encuestacsc/index');
				redirect(site_url($this->session->user_guard) . '/index');
				//redirect('admin/users');
			}
		} else {
			//redirect('home/acceso_denegado');
			$this->session->set_flashdata('error', 'Ingrese su usuario y contraseña.');
			//$this->index();
			$this->index();
		}
	}

	public function loginok()
	{
		$login = $this->input->post('username');
		$password = $this->input->post('password');
		//return $this->Usuariolib->login($login, $password);
		$this->load->library('LoginLib');
		$util = new LoginLib();
		$checkUser = $util->login($login, $password);
		//print_r('checkUser'.$checkUser);
		$this->session->set_flashdata('error', $checkUser['error']);
		return $checkUser['isLogged'];
		/*if($checkUser->isLogged){
            redirect('/admin/users');
        }else{
            // Display error message
            $this->session->set_flashdata('flashError', 'Error de usuario y/o contraseña o usuario desactivado.');
            redirect('/home');
        }*/
	}

	public function logout()
	{
		$this->session->sess_destroy();
		//redirect('/');
		redirect('/login');
	}
}
