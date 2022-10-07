<?php

namespace App\Http\Controllers;

use App\Models\{city,store};
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function AboutPage(Request $request) {

        return view('about');
    }

    public function Prestige(Request $request) {

        return view('Brands.Prestige-brands');
    }
    public function Popular(Request $request) {

        return view('Brands.Popular-brands');
    }
    public function Lifestyle(Request $request) {

        return view('Brands.Lifestyle-brands');
    }
    public function Fashion(Request $request) {

        return view('Brands.Fashion-brands');
    }

    public function Brands(Request $request) {

        return view('brands');
    }


    public function Index(Request $request) {

        return view('Index');
    }

    public function Maisondeperfums(Request $request) {

        return view('Maisondeperfums');
    }

    public function Ourstores(Request $request) {

        return view('Ourstores');
    }


    public function Storelocator(Request $request) {

        $city=city::all();
        $store=store::all();
        return view('Storelocator',["storedata"=>$store,"storecity"=>$city]);
    }


    public function GetStoreImage($id)
    {

        $city = city::all();
        $store = store::all();
        return view('Storelocator', ["storedata" => $store, "storecity" => $city]);
    }



}
