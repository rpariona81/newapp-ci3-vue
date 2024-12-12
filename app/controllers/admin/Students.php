<?php

class Students extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'my_tag_helper'));
        $this->load->model('User_eloquent');
        $this->load->model('Career_eloquent');
        $this->form_validation->set_message('no_repetir_username', 'Existe otro registro con el mismo %s');
        $this->form_validation->set_message('no_repetir_email', 'Existe otro registro con el mismo %s');
        $this->form_validation->set_message('no_repetir_document', 'Existe otro registro con el mismo %s');
        $this->form_validation->set_message('no_repetir_email_admin', 'Existe otro registro con el mismo %s');
        $this->form_validation->set_message('no_repetir_programa', 'Existe otro programa con el mismo %s');
        /**
         * En caso se defina el campo mobile como único, validaremos si ya se registró anteriormente
         */
        $this->form_validation->set_message('no_repetir_mobile', 'Existe otro registro con el mismo %s');
    }

    public function index()
    {
        $role_select = $this->input->post('role_select', true);
		$this->data['role_Value'] = isset($role_select) ? $role_select : null;

		$status_select = $this->input->post('status_select', true);
		$this->data['status_Value'] = isset($status_select) ? $status_select : null;

		$this->data['records'] = User_Eloquent::getUsersRoleStudent($this->session->userdata('user_id'), $role_select, $status_select);

		//$this->data['records'] = User_Eloquent::DDgetUsersRoles($this->session->userdata('user_id'), $role_select, $status_select);

		//$this->data['info'] = 'Bienvenido(a) ' . $this->session->userdata('user_login');
		//$this->data['records'] = User_Eloquent::getUsersRoles($this->session->userdata('user_id'));
		$this->data['roles'] = Role_Eloquent::getRoleOpciones($this->session->userdata('user_role_id'));
		$this->data['condiciones'] = User_Eloquent::getListStatusUsers();

		//print_r(json_encode($this->data));
		$this->render('admin/users/index');
    }
}
