<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Employees;
use App\Employees_statuses;
class Logins extends Authenticatable{
    //
    protected $table = 'logins';
    public $timestamps = false;
    protected $fillable = ['id_employee','username','password','id_employee_status','register_at'];
    protected $primaryKey = 'id_employee';

    public function user_data(){
        return $this->hasOne('App\Employees','id_employee','id_employee')->orderBy('name'); // (model, column_table_fk)
    }

    public function user_status(){
    	return $this->hasOne('App\Employee_statuses','id_employee_status','id_employee_status');//(modul, pk, fk)
    }
}
