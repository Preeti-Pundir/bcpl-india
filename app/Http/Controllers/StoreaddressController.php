<?php

namespace App\Http\Controllers;

use App\Models\storeaddress;
use Illuminate\Http\Request;

class StoreaddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(["res"=>storeaddress::all()],200);
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
    public function store(Request $req)
    {
        //
        $addres= new storeaddress;
        $addres->store_id=$req->storeid;
        $addres->city_id =$req->cityid;
        $storename= $addres->storename=$req->storename;
        $addres->storeaddress=$req->storeaddress;
        $addres->pincode=$req->pincode;
        $addres->email=$req->email;
        $addres->no=$req->no;
        $addres->save();

        return response(["msg"=>"successfull created ".$storename."address"]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\storeaddress  $storeaddress
     * @return \Illuminate\Http\Response
     */
    public function show(storeaddress $storeaddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\storeaddress  $storeaddress
     * @return \Illuminate\Http\Response
     */
    public function edit(storeaddress $storeaddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\storeaddress  $storeaddress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, storeaddress $storeaddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\storeaddress  $storeaddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(storeaddress $storeaddress)
    {
        //
        $storeaddress->delete();
        return response(["msg"=>"successfully delated"],200);
    }
}
