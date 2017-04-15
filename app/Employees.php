<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Logins;
class Employees extends Model
{
    //
    protected $table = 'employees';
    public $timestamps = false;
    protected $fillable = ['name','telp','address','photo'];
	protected $primaryKey = 'id_employee';
    public function user_data(){
        return $this->hasOne('App\Logins');
    }
}
