<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpkpsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        return view('ipkps.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        Session::flash('flash_message', 'Tambah IPKPS berhasil !');
        Session::flash('flash_type', 'alert-success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $ipkps['ipkps'] = Ipkps::find($id);
        return view('ipkps.show', compact('ipkps'));
    }

    public function komponen($id)
    {
        // $komponen['komponen'] = Komponen::find($id);
        return view('ipkps.komponen.'.$id , compact('komponen'));
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

        Session::flash('flash_message', 'Edit IPKPS berhasil !');
        Session::flash('flash_type', 'alert-success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Session::flash('flash_message', 'Hapus IPKPS berhasil !');
        Session::flash('flash_type', 'alert-success');
    }
}
