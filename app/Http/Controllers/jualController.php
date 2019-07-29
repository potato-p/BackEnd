<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\model\detail;
use App\model\jual;
use App\model\pelanggan;
use App\model\karyawan;
use App\model\mokit;
use App\model\stok;

class jualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jual = jual::all();
        return view("penjualan.index",['jual'=>$jual]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggan = pelanggan::all();
        $karyawan = karyawan::all();
        $jual = jual::all();
        return view("penjualan.create",['jual'=>$jual,'pelanggan'=>$pelanggan,'karyawan'=>$karyawan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $jual = jual::create([
            'tanggal'=>$request->tanggal,
            'karyawan_id'=>$request->karyawan_id,
            'pelanggan_id'=>$request->pelanggan_id,
        ]);
        return $jual->no;
        // return redirect()->route('penjualan.show',['no'=>$jual->no]);
        return redirect()->route('penjualan.show', ['id'=>$jual->no]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jual = jual::where('no',$id)->first();
        $mokit = mokit::all();
        $stok = stok::all();
        $karyawan = karyawan::all();
        $detail = detail::all();
        return view('penjualan.show')
        ->with('penjualan',$jual)
        ->with('mokit',$mokit)
        ->with('stok',$stok)
        ->with('karyawan',$karyawan)
        ->with('detail',$detail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggan = pelanggan::all();
        $karyawan = karyawan::all();
        $jual = jual::where('no',$id)->first();
        return view("penjualan.edit", ['jual'=> $jual],['pelanggan'=>$pelanggan,'karyawan'=>$karyawan]);
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
        jual::where('no',$id)
        ->update(['tanggal' => $request ->tanggal,'karyawan_id'=>$request->karyawan_id,
        'pelanggan_id'=>$request->pelanggan_id]);
        return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jual::where('no', $id)->delete();
        return redirect()->route('penjualan.index');
    }
}
