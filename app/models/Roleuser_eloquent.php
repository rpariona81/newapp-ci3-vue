<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

use Eloquent\BaseModel;

class RoleUser_Eloquent extends BaseModel{
    
    protected $table = 't_role_user';
    //protected $dateFormat = 'Ymd H:i:s';

    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'role_id', 
    ];

    //public $timestamps = false;

    

}
