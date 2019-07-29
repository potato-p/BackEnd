<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class mokit extends Model
{
    protected $table = 'mokit';
    protected $fillabel = ['nama'];

    protected $guarded = ['id'];


    Const UPDATED_AT = null;
    Const CREATED_AT = null;

    public function supplier()
    {
    	return $this->belongsTo('App\model\supplier', 'supplier_id');
    }
    public function stok()
    {
    	return $this->hasMany('App\model\stok', 'mokit_id');
    }
}
