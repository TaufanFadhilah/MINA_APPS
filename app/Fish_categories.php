<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fish_categories extends Model
{
    //
    protected $table = 'fish_categories';
    public $timestamps = false;
    protected $fillable = ['name','description','photo'];
    protected $primaryKey = 'id_fish_category';
}
