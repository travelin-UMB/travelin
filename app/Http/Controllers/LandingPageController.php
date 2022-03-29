<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    
    public function index(Request $request){
        return view('pages.landingpage.index');
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
