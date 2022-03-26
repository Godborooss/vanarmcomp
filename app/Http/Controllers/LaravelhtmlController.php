<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class LaravelhtmlController extends Controller
{
    public function index()
    {

        $products=Product::all()->sortby('order');
        return view('index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);



    }

public function about()  {

        return view('about-us');
}
public function blog (){
    $blogs=Blog::all();
        return view('blog-post-list',compact('blogs'));

}

}

