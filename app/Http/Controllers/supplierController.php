<?php

namespace App\Http\Controllers;

use App\model\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class supplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = supplier::all();
        
        return view("supplier.index", ['supplier'=> $supplier]);
    }

    /**
     * 
     *
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("supplier.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('supplier')->insert(['nama' => $request ->nama,
        'alamat'=>$request->alamat,'kota'=>$request->kota,'no_tlp'=>$request->no_tlp]);

        return redirect()->route('supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = supplier::where('id',$id)->first();
        return view("supplier.edit", ['supplier'=> $supplier]);
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
        supplier::where('id',$id)->
        update(['nama' => $request ->nama,
        'alamat'=>$request->alamat,'kota'=>$request->kota,'no_tlp'=>$request->no_tlp]);

        return redirect()->route('supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        supplier::where('id', $id)->delete();
        return redirect()->route('supplier.index');
    }
}
