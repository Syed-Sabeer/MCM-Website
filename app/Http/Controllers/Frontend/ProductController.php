<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('frontend.products');
    }

    public function show()
    {
        return view('frontend.product-detail');
    }
}
