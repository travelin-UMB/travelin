<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\travel_packages;

class LandingPageController extends Controller
{
    
    public function index(Request $request){
        $data = travel_packages::orderBy('created_at', 'DESC')->get();
    
        $params['data'] = $data;
        return view('pages.landingpage.index')->with($params);
    }

    public function city(Request $request){
        return view('pages.landingpage.feature_destination');
    }

    public function our_package(Request $request){
        return view('pages.landingpage.our_packages');
    }

    public function my_package(Request $request){
        return view('pages.landingpage.my_package');
    }

    public function package_detail($city, $name, $id){
        return view('pages.landingpage.detail_package');
    }

}
