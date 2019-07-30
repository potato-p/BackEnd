<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\mokit;
use App\Model\supplier;

class ApiController extends Controller
{
    public function getmokit(){
    	$data = mokit::with('supplier')->get();
    	
    	return $data;
    }

    //menampilkan satu record tabel
    public function getmokits($id)
    {
    	$data = mokit::where('id', $id)
    	->with('supplier')
    	->first();
    	return $data;
    }

    public function postmokit(Request $request)
    {

    	$save = mokit::create($request->all());
    	if ($save) {
    		# code...
    		$res = array(
    			'status' => true,
    			'message' => 'produk berhasil disimpan!'
    		);
    	}else{
    		$res = array(
    			'status' => false,
    			'message' => 'Gagal Menyimpan'
    		);
    	}

    	return response()->json($res);
    	// return $request->all();
    }

    public function updatemokit($id, Request $request)
    {
    	$save = mokit::where('id', $id)->update($request->all());
    	if ($save) {
    		# code...
    		$res = array(
    			'status'=> true,
    			'message' => 'produk berhasil diubah'
    		);
    	}else{
    		$res = array(
    			'status' => false,
    			'message' => 'Gagal diubah'
    		);
    	}

    	return response()->json($res);
    }

    public function getsupplier(Request $request)
    {
        $res = array(
            'user' => $request->user(),
            'supplier' => supplier::all()
        );
        return response()->json($res);
    }
}
