<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

use Eloquent\BaseModel;
use \Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Carbon;


class Registroasistentes_Eloquent extends BaseModel
{

	protected $table = 't_registroasistentes';
	//protected $dateFormat = 'Ymd H:i:s';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array<int, string>
	 */
	protected $fillable = [
		'time',
		'region', //lowercase
		'codentidad', // optional
		'titulo_entidad', //optional, set to 1 by default
		'dni', //optional, set to 1 by default
		'nombres',
		'apellidos', //optional, set to 1 by default
		'correo',
		'telf_celular',
		'cargo',
		'programa_cargo_especifico',
		'reunion',
		'dirigido_a',
		'hora_inicio',
		'hora_fin',
		'responsable',
		''
	];

	public static function getTituloEntidad($codentidad)
	{
		$titulo_entidad = array();
		$titulo_select = DB::table('t_entidades')->where('codentidad','=',$codentidad)->select('titulo_entidad')->get();
		foreach ($titulo_select as $registro) {
            $titulo_entidad[0] = $registro->titulo_entidad;
        }
        return $titulo_entidad[0];
	}

	public static function getTituloRegion($codregion)
	{
		$titulo_region = array();
		$titulo_select = DB::table('t_regiones')->where('codregion','=',$codregion)->select('region_alias')->get();
		foreach ($titulo_select as $registro) {
            $titulo_region[0] = $registro->region_alias;
        }
        return $titulo_region[0];
	}

	public static function saveRecord($request)
	{
		$data = array(
			'time' => Carbon::now(),
			//'region' => $request['REGION'],
			'region' => Registroasistentes_Eloquent::getTituloRegion($request['REGION']),
			'codentidad' => $request['ENTIDAD'],
			'titulo_entidad' => Registroasistentes_Eloquent::getTituloEntidad($request['ENTIDAD']),
			'dni' => trim($request['DNI']),
			'nombres' => strtoupper(trim($request['NOMBRES'])),
			'apellidos' => strtoupper(trim($request['APELLIDOS'])),
			'correo' => strtolower(trim($request['CORREO'])),
			'telf_celular' => trim($request['CELULAR']),
			'cargo' => strtoupper($request['CARGO']),
			'programa_cargo_especifico' => isset($request['OTRO_CARGO']) ? strtoupper(trim($request['OTRO_CARGO'])) : NULL
		);

		try {
			$model = new Registroasistentes_Eloquent();
			$model->fill($data);
			$model->save($data);
			return $model;
		} catch (ModelNotFoundException $e) {
			//throw $th;
			return FALSE;
		}
	}
}
