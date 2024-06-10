<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function dashboard()
    {
        return view('index');
    }
    public function add_addons()
    {
        return view('add_addons');
    }
    public function addons()
    {
        return view('addons');
    }
    public function coupons()
    {
        return view('coupons');
    }
    public function packages()
    {
        return view('packages');
    }
    public function packagessetting()
    {
        return view('packagessetting');
    }
    public function services()
    {
        return view('services');
    }
    public function setting()
    {
        return view('setting');
    }
    public function timesetting()
    {
        return view('timesetting');
    }
    public function zones()
    {
        return view('zones');
    }

}
