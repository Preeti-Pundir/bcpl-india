<?php

namespace App\Http\Controllers;

use App\Models\subscribe;
use Illuminate\Http\Request;
use Validator;
class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response(["email"=>subscribe::all()],200);
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
        $rules=array(
            'email' => 'required|email',
        );
        $velid= Validator::make($req->all(),$rules);
     if ($velid->fails()) {
        # code...
        return response([
            "error"=>$velid->errors(),
            "errorcode"=>400
    ],200);
}
        $subscribeuser=new subscribe;
        $subscribeuser->email=$req->email;
        $subscribeuser->save();

        return response(["msg"=>"You have successfully subscribed to our newsletter"],200);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(subscribe $subscribe)
    {
        //
    }
}
