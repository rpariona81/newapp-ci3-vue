<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

use Eloquent\BaseModel;
use \Illuminate\Database\Capsule\Manager as DB;

class Marcoinstituto_Eloquent extends BaseModel
{

	protected $table = 't_marco_instituto';
	//protected $dateFormat = 'Ymd H:i:s';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'user_id',
		'instituto_id'
	];

	public static function getMarcoInstitutosByRegion($region_id = NULL)
	{
		if ($region_id == NULL) {
			return Marcoinstituto_Eloquent::leftjoin('t_users', 't_users.id', '=', 't_marco_instituto.user_id')
				->leftjoin('t_institutos', 't_institutos.id', '=', 't_marco_instituto.instituto_id')
				->leftjoin('t_role_user', 't_role_user.user_id', '=', 't_users.id')
				->leftjoin('t_roles', 't_role_user.role_id', '=', 't_roles.id')
				->get(['t_institutos.*', 't_users.username', 't_users.email', 't_role_user.role_id', 't_roles.rolename']);
		} else {
			return Marcoinstituto_Eloquent::leftjoin('t_users', 't_users.id', '=', 't_marco_instituto.user_id')
				->leftjoin('t_institutos', 't_institutos.id', '=', 't_marco_instituto.instituto_id')
				->leftjoin('t_role_user', 't_role_user.user_id', '=', 't_users.id')
				->leftjoin('t_roles', 't_role_user.role_id', '=', 't_roles.id')
				->where('t_institutos.region_id', '=', $region_id)
				->get(['t_institutos.*', 't_users.username', 't_users.email', 't_role_user.role_id', 't_roles.rolename']);
		}
	}

	public static function selectMarcoInstitutoByInstituto($instituto_id = NULL)
	{
		return Marcoinstituto_Eloquent::leftjoin('t_users', 't_users.id', '=', 't_marco_instituto.user_id')
			->leftjoin('t_institutos', 't_institutos.id', '=', 't_marco_instituto.instituto_id')
			->leftjoin('t_role_user', 't_role_user.user_id', '=', 't_users.id')
			->leftjoin('t_roles', 't_role_user.role_id', '=', 't_roles.id')
			->get(['t_institutos.*', 't_users.username', 't_users.email', 't_role_user.role_id', 't_roles.rolename']);
	}
}
