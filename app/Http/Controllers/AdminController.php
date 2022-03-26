<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {

        $blogs = Blog::latest()->paginate(5);

        return view('admin',compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);



    }
}
