<?php

class Roles extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		//$this->load->helper('security');
		$this->load->model('User_eloquent');
		$this->load->model('Role_eloquent');
		$this->load->model('Roleuser_eloquent');
		$this->load->library('pagination');
	}


	public function index()
	{
		$this->data['info'] = 'Bienvenido(a) ' . $this->session->userdata('user_login');
		$this->data['records'] = Role_eloquent::all();
		$this->render('admin/roles/index');
	}

	public function table()
	{
		//$data = array();
		$config['base_url'] = base_url() . 'admin/roles/table';
		$total_row = User_Eloquent::countRecords(); //total row
		$config["total_rows"] = $total_row;

		$config['per_page'] = 2;  //show record per halaman

		$config['uri_segment'] = 4;

		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = FALSE;
		$config['enable_query_strings'] = FALSE;

		$choice = $config["total_rows"] / $config["per_page"];
		//$config["num_links"] = floor($choice);
		$config["num_links"] = (fmod(floor($choice), 4) > 4) ? fmod(floor($choice), 4) : 4;

		// Membuat Style pagination untuk BootStrap v4
		$config['first_link']       = '<li class="page-item"><span class="page-link">First</span></li>';
		$config['last_link']        = '<li class="page-item"><span class="page-link">Last</span></li>';
		$config['next_link']        = 'Next';
		$config['prev_link']        = 'Prev';
		$config['full_tag_open']    = '<nav aria-label="..." class="ms-auto"><ul class="pagination pagination-light mb-0">';
		$config['full_tag_close']   = '</ul></nav>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link" aria-current="page">';
		$config['cur_tag_close']    = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link" aria-hidden="true">';
		$config['next_tag_close']  = '</span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link border-0 font-weight-bold" href="javascript:;">';
		$config['first_tag_close'] = '</span></li>';

		$this->pagination->initialize($config);
		$this->data['page'] = ($this->uri->segment(4)) ? ($this->uri->segment(4) - 1) * $config['per_page'] : 0;

		$str_links = $this->pagination->create_links();
		$this->data['links'] = explode('&nbsp;', $str_links);
		//$results = $this->db->get('t_users', $config['per_page'], $this->uri->segment(4))->result_array();
		//$results = User_Eloquent::skip($this->uri->segment(4))->take($config['per_page'])->get();
		//$this->data['records'] = User_Eloquent::skip($this->data['page'])->take($config['per_page'])->get();
		$this->data['records'] = User_Eloquent::getUsersRolesPaginate($this->data['page'], $config['per_page']);
		
		/*foreach ($this->data['records'] as $row) {

			echo $row['row'] . ' - ';
			echo $row['rolename'] . ' - ';
			echo $row['username'] . '\r\n<br>';
		}

		echo $this->pagination->create_links();*/

		$this->data['pagination'] = $this->pagination->create_links();
		$this->render('admin/roles/table');
	}
}