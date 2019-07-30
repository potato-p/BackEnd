<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\model\detail;
use App\model\jual;
use App\model\pelanggan;
use App\model\karyawan;
use App\model\mokit;

class detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail = detail::all();
        return view("detail.index",['detail'=>$detail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $mokit = karyawan::all();
        $jual = jual::all();
        return view("detail.create",['jual'=>$jual,'mokit'=>$mokit]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = detail::create([
            'mokit_id'=>$request->mokit_id,
            'penjualan_id'=>$request->penjualan_id,
            'jumlah'=>$request->jumlah,
        ]);

        return redirect()->route('penjualan.show',['id' => $detail->penjualan_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        detail::where('id', $id)->delete();
        return redirect()->route('detail.index');
    }
}
