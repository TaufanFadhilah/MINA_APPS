<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    //
    protected $table = 'suppliers';
    public $timestamps = false;
    protected $fillable = ['name','telp','address','email','photo'];
    protected $primaryKey = 'id_supplier';

}
