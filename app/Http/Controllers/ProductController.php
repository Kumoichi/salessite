<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Link;


class ProductController extends Controller
{
    // test function
    public function index()
    {
        return view('products.index');
    }

    //adding comments
    public function create()
    {
        return view('products.create');
    }
}


