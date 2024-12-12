<?php

if (!defined('BASEPATH'))
    exit('No permitir el acceso directo al script');

// Validaciones para el modelo de usuarios (login, cambio clave, CRUD Usuario)
class MenuLib {

    private $ci;
    function __construct() {
        $this->ci = & get_instance(); // Esto para acceder a la instancia que carga la librería
        $this->ci->load->model('Menu_eloquent');
        $this->ci->load->model('Menurole_eloquent');
        $this->ci->load->model('Role_eloquent');
    }

    public function findByController($controller) {
        $query = Menu_eloquent::where('controller','=', $controller)->select('id')->get();
        return $query;
    }

    public function findByMenuAndRole($role_id, $menu_id) {
        return Menu_Eloquent::leftjoin('t_menu_role', 't_menu_role.menu_id', '=', 't_menus.id')
        ->leftjoin('t_roles', 't_menu_role.role_id', '=', 't_roles.id')
        ->where('t_menu_role.role_id', '=', $role_id)
        ->where('t_roles.status', '=', 1)
        ->get(['t_menus.*', 't_roles.guard_name']);
    }

}