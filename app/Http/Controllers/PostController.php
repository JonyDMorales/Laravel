<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $post = Post::all();
        return view('welcome')
            ->with('posts', $post);
    }

    public function create(){
        return view('create');
    }

    public function save(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user = auth()->user()->name;
        $post->id = auth()->id();
        if($post->save()){
            return view('shared.complete.200')
                ->with('mensaje', 'Correcto');
        }
        return view('shared.complete.404')
            ->with('mensaje', 'Correcto');
    }


}
