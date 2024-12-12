<?php

if (!defined('BASEPATH'))
    exit('No permitir el acceso directo al script');

// Validaciones para el modelo de usuarios (login, cambio clave, CRUD Usuario)
class LoginLib
{

    private $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        // Esto para acceder a la instancia que carga la librería
        $this->ci->load->model('User_eloquent');
        $this->ci->load->model('Role_eloquent');
        $this->ci->load->model('Roleuser_eloquent');
		$this->ci->load->model('Session_eloquent');
        //$this->isLogged = FALSE;
    }

    public function login($user, $pass)
    {
        $query = User_eloquent::getLogin($user, $pass);
		//print_r($query);
        if ($query['isLogged']) {
            $this->ci->session->set_userdata($query);
			//$session_user = Session_eloquent::where('id',$this->ci->session->userdata('session_id'))->first();
			//$session_user->user_id = $query['user_id'];
			$model = Session_eloquent::insertUserSession($query['user_id']);
			//$model->user_id=1;
			//$model->save();
			//,$query['user_id']);
			//$session_user->save();
            //print_r($query);
            return $query;
        } else {
            //$this->ci->session->sess_destroy();
            $this->ci->session->set_flashdata($query['error']);
            return $query;
        }
    }
}
