<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('Frontend.services');
    }
    public function services2()
    {
        return view('Frontend.services2');
    }
    public function services3()
    {
        return view('Frontend.services3');
    }
    public function services4()
    {
        return view('Frontend.services4');
    }
    public function services5()
    {
        return view('Frontend.services5');
    }
}
