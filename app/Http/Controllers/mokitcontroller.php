<?php

namespace App\Http\Controllers;

use App\model\mokit;
use App\model\supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mokitcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mokit = mokit::all();
        return view("mokit.index", ['mokit'=> $mokit]);
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
        return view("mokit.create",['supplier'=>$supplier],['mokit'=>$mokit]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('mokit')->insert(['nama' => $request ->nama,
        'grade'=>$request->grade,'supplier_id'=>$request->supplier_id]);

        return redirect()->route('mokit.index');
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
        
        $supplier = supplier::all();
        $mokit = mokit::where('id',$id)->first();
        return view("mokit.edit", ['mokit'=> $mokit],['supplier'=>$supplier]);
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

        mokit::where('id',$id)->
        update(['nama' => $request ->nama,
        'grade'=>$request->grade,'supplier_id'=>$request->supplier_id]);

        return redirect()->route('mokit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        mokit::where('id', $id)->delete();
        return redirect()->route('mokit.index');
    }
}
