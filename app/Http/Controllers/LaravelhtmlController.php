<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class LaravelhtmlController extends Controller
{
    public function index()
    {
        $products=Product::all();
        return view('index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);



    }



}

