<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillabel = ['nama'];

    Const UPDATED_AT = null;
    Const CREATED_AT = null;

    public function stok()
    {
    	return $this->hasMany('App\model\stok', 'karyawan_id');
    }

    public function karyawan()
    {
    	return $this->hasMany('App\model\karyawan', 'karyawan_id');
    }
}
