<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // test function
    public function index()
    {
        return view('products.index');
    }
}
