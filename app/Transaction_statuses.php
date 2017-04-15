<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction_statuses extends Model
{
    //
    protected $table = 'transaction_statuses';
    public $timestamps = false;
    protected $fillable = ['name','price'];
    protected $primaryKey = 'id_transaction_status';
}
