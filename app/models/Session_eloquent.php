<?php

use Eloquent\BaseModel;
use \Illuminate\Database\Capsule\Manager as DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Carbon;


class Session_Eloquent extends BaseModel
{
	protected $table = 't_sessions';
	//
	protected $appends = ['expires_at'];

	public $timestamps = FALSE;

	public function isExpired()
	{
		return $this->timestamp < Carbon::now()->subMinutes($this->config['sess_expiration'])->getTimestamp();
	}

	public function getExpiresAtAttribute()
	{
		return Carbon::createFromTimestamp($this->timestamp)->addMinutes($this->config['sess_expiration'])->toDateTimeString();
	}

	public static function insertUserSession($user_id = NULL)
	{
		if ($user_id !== null) {
			try {
				$model = Session_Eloquent::where('id', session_id())->first();
				$model->user_id = $user_id;
				$model->save();
				return $model;
			} catch (ModelNotFoundException $e) {
				//throw $th;
				return FALSE;
			}
		}
		return FALSE;
	}
}
