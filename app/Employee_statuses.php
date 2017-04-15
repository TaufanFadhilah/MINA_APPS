<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_statuses extends Model
{
    //
    protected $table = 'employee_statuses';
    public $timestamps = false;
    protected $fillable = ['name'];
    protected $primaryKey = 'id_employee_status';
}
