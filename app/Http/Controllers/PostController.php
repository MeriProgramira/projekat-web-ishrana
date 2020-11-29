<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function indexBlog()
    {
        $posts = Post::orderBy('created_at','desc' )->take(3)->get();
        return view('pages.blog', compact('posts'));
    }

    public function index()
    {
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        //dd('create');
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
           //'image' => 'mimes:jpg, jpeg, png|required'
        ]);
        $path = $this->uploadImage($request);
        /* Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
            'user_id' => 1,

        ]); */

        $request->user()->posts()->create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $path,
        ]);

        return redirect()->route('dashboard');
    }

    public function create()
    {

        return view('posts.create');
    }

    private function uploadImage(Request $request)
    {
        if (!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }

        $file = $request->file('image');
        if (!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }

        $path = '/uploads/' . $file->getClientOriginalName();


        $file->move('uploads', $file->getClientOriginalName());
        return $path;
    }
}
