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
        $posts = Post::orderBy('created_at','desc' )->get();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        //dd('create');
        $this->validate($request, [
            'title' => 'required|max:255',
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

    public function edit($id) {

        $post = Post::find($id);
        return view('posts.update', compact('post'));

    }

    public function updatePost(Request $request, $id) {

        $post = Post::find($id);

        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $image = $request->file('image');
        if($image != "") {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path =$this->uploadImage($request);
            $post->image = $path;
        }

        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $post->save();

        return redirect()->route('dashboard');
        //->with('success', 'Post je uspjesno azuriran');

    }

    public function destroy(Post $post) {

        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }
}
