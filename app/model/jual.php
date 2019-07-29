<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class jual extends Model
{
    protected $table = 'penjualan';
    protected $fillabel = ['no'];

    protected $guarded = ['id'];


    Const UPDATED_AT = null;
    Const CREATED_AT = null;

    public function pelanggan()
    {
    	return $this->belongsTo('App\model\pelanggan', 'pelanggan_id');
    }

    public function karyawan()
    {
    	return $this->belongsTo('App\model\karyawan', 'karyawan_id');
    }

}
