<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('frontend.service');
    }
    
    public function show($id)
    {
        return view('frontend.service_detail', compact('id'));
    }

}
