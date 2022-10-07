<?php

namespace App\Http\Controllers;

use App\Models\map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(["res"=>map::all()],200);
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
        $map=new map;
        $map->store_id=$req->storeid;
        $map->city_id =$req->cityid;
        $map->ifram=$req->ifram;
        $map->save();

        return response(["msg"=>"successfull created "],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\map  $map
     * @return \Illuminate\Http\Response
     */
    public function show(map $map)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\map  $map
     * @return \Illuminate\Http\Response
     */
    public function edit(map $map)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\map  $map
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, map $map)
    {
        //
        $map=map::where('id',$req->id)->update($req->all())->getAll();

        return response([
            "res"=>"updated",
            "city"=>$map
        ],200
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\map  $map
     * @return \Illuminate\Http\Response
     */
    public function destroy(map $map)
    {
        //
        $map->delete();
        return response(["res"=>"Succesufully deleted"],200);
    }
}
