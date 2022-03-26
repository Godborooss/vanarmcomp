<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Product::orderBy('order','ASC')->get();
        return view('post',compact('posts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function update(Request $request)
    {
        $posts = Product::all();

        foreach ($posts as $post) {
            foreach ($request->order as $order) {
                if ($order['id'] == $post->id) {
                    $post->update(['order' => $order['position']]);
                }
            }
        }

        return response('Update Successfully.', 200);
    }
}
