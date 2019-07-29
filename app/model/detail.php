<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table = 'detail';
    

    protected $guarded = ['id'];


    Const UPDATED_AT = null;
    Const CREATED_AT = null;

    public function jual()
    {
    	return $this->penjualan('App\model\jual', 'penjualan_id');
    }
	public function mokit()
    {
    	return $this->belongsTo('App\model\mokit', 'mokit_id');
    }    

}
