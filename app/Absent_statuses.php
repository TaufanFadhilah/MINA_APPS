<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absent_statuses extends Model
{
    //
    protected $table = 'absent_statuses';
    public $timestamps = false;
    protected $fillable = ['name'];
    protected $primaryKey ='id_absent_status';
}
