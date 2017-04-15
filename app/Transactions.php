<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    //
    protected $table = 'transactions';
    public $timestamps = false;
    protected $fillable = ['id_fish_category','id_employee','id_supplier','amount','total_price','datetime','id_fish_status'];
    
    public function fish_detail(){
    	return $this->hasOne('App\Fish_categories','id_fish_category','id_fish_category');
    }

    public function employee_detail(){
    	return $this->hasOne('App\Employees','id_employee','id_employee');
    }

    public function supplier_detail(){
    	return $this->hasOne('App\Suppliers','id_supplier','id_supplier');
    }

    public function status_detail(){
    	return $this->hasOne('App\Transaction_statuses','id_transaction_status','id_transaction_status');
    }
}	
