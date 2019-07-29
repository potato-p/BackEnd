<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillabel = ['nama'];

    protected $guarded = ['id'];


    Const UPDATED_AT = null;
    Const CREATED_AT = null;

    public function jual()
    {
    	return $this->hasMany('App/model/jual', 'pelanggan_id');
    }
}
