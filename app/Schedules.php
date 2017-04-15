<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    //
    protected $table = 'schedules';
    public $timestamps = false;
    protected $fillable = ['name','id_employee','id_manager','datetime'];

    public function schedule_employee(){
        return $this->hasOne('App\Employees','id_employee','id_employee'); // (model, column_table_fk)
    }

    public function schedule_manager(){
        return $this->hasOne('App\Employees','id_employee','id_manager'); // (model, column_table_fk)
    }
}
