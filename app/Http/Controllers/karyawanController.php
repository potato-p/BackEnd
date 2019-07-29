<?php

namespace App\Http\Controllers;

use App\model\karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = karyawan::all();
        
        return view("karyawan.index", ['karyawan'=> $karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("karyawan.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('karyawan')->insert(['nama' => $request ->nama,
        'alamat'=>$request->alamat,'kota'=>$request->kota,'no_tlp'=>$request->no_tlp]);

        return redirect()->route('karyawan.index');
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
        $karyawan = karyawan::where('id',$id)->first();
        return view("karyawan.edit", ['karyawan'=> $karyawan]);
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
        karyawan::where('id',$id)->
        update(['nama' => $request ->nama,
        'alamat'=>$request->alamat,'kota'=>$request->kota,'no_tlp'=>$request->no_tlp]);

        return redirect()->route('karyawan.index');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        karyawan::where('id', $id)->delete();
        return redirect()->route('karyawan.index');
    }
}
