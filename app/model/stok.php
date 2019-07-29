<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    protected $table = 'stok';
    // protected $fillabel = ['no'];

    protected $guarded = ['id'];

    Const UPDATED_AT = null;
    Const CREATED_AT = null;

    public function mokit()
    {
    	return $this->belongsTo('App\model\mokit', 'mokit_id');
    }
    public function karyawan()
    {
    	return $this->belongsTo('App\model\karyawan', 'karyawan_id');
    }

    public function supplier()
    {
    	return $this->belongsTo('App\model\supplier', 'supplier_id');
    }
    public function jual()
    {
        return $this->hasMany('App\model\jual', 'stok_id');
    }
}
