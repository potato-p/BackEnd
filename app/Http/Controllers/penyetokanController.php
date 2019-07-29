<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\model\stok;
use App\model\mokit;
use App\model\karyawan;
use App\model\supplier;

class penyetokanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stok = stok::all();
        
        return view("stok.index", ['stok'=> $stok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mokit = mokit::all();
        $supplier = supplier::all();
        $karyawan = karyawan::all();
        $stok = stok::all();
        return view('stok.create')->with('karyawan',$karyawan)
        ->with('supplier',$supplier)->with('mokit',$mokit);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stok = stok::create($request->all());
        return redirect()->route('stok.index');

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
        $mokit = mokit::all();
        $supplier = supplier::all();
        $karyawan = karyawan::all();
        $stok = stok::where('no',$id)->first();
        return view("stok.edit")->with('stok',$stok)->with('karyawan',$karyawan)
        ->with('supplier',$supplier)->with('mokit',$mokit);
        // return view("stok.edit", ['stok'=> $stok],['karyawan'=>$karyawan],['supplier'=>$supplier],['mokit'=>$mokit]);
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
        stok::where('no',$id)
        ->update(['tanggal' => $request ->tanggal,
        'karyawan_id'=>$request->karyawan_id,'supplier_id'=>$request->supplier_id,'mokit_id'=>$request->mokit_id,'jumlah_mokit'=>$request->jumlah_mokit,'h_jual'=>$request->h_jual,'h_beli'=>$request->h_beli]);
        return redirect()->route('stok.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        stok::where('no', $id)->delete();
        return redirect()->route('stok.index');
    }
}
