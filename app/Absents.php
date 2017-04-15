<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absents extends Model
{
    //
    protected $table = 'absents';
    public $timestamps = false;
    protected $fillable = ['id_employee','id_absent_status','datetime'];
}
