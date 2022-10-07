<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{storeaddress,map,city};
use App\Models\StoreHasPictures;
use Illuminate\Support\Facades\DB;


// use DB;
// use Illuminate\Support\Facades\DB as FacadesDB;

class storelocator extends Controller
{
    //
    public function index(Request $req){

      $image = DB::table('store_has_pictures')->where('store_id','=',$req->store)->get();
    //  $images = DB::table('store_has_pictures')->where('city_id','=',$req->city)->get();
       $store= storeaddress::store($req->store)->city($req->city)->get();
       $ifram= map::IframStore($req->store)->IframCity($req->city)->get();



        return response([
            "store"=>$store,
            "ifram"=>$ifram,
            "image"=>$image,
            // 'images'=>$images,
        ],200);
    }

    public function storeCity(Request $req){
       $city= city::StorCity($req->store)->get();

       return response(["city"=>$city],200);
    }
    public function city(Request $req){
        $city = city::city($req->city)->get();
        return response(["city"=>$city],200);
    }

}
