<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table = 'supplier';
    protected $fillabel = ['nama'];

    Const UPDATED_AT = null;
    Const CREATED_AT = null;

    public function mokit()
    {
    	return $this->hasMany('App\model\mokit', 'supplier_id');
    }

    public function stok()
    {
    	return $this->hasMany('App\model\stok', 'supplier_id');
    }
}
