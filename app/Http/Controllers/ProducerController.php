<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producer;

class ProducerController extends Controller
{
    public function indexProducer()
    {
        $producers = Producer::orderBy('created_at','desc' )->take(3)->get();
        return view('pages.producers', compact('producers'));
    }

    public function index() {

        $producers = Producer::orderBy('created_at','desc' )->get();
        return view('producers.index', compact('producers'));
    }

    public function create() {

        return view('producers.create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255',
            'location' => 'required|max:255',
            'products' => 'required|max:255',
            'about' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = $this->uploadImage($request);

        $request->user()->producers()->create([
            'title' => $request->title,
            'location' => $request->location,
            'products' => $request->products,
            'about' => $request->about,
            'image' => $path,
        ]);

        return redirect()->route('dashboard', ['id' => auth()->user()->id])->with('name', auth()->user()->name);
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

    public function show(Producer $producer) {
        return view('producers.show', ['producer' =>$producer]);
    }

    public function edit($id) {
        $producer = Producer::find($id);
        return view('producers.update', compact('producer'));

    }

    public function updateProducer(Request $request, $id) {

        $producer = Producer::find($id);

        $this->validate($request, [
            'title' => 'required|max:255',
            'location' => 'required|max:255',
            'products' => 'required|max:255',
            'about' => 'required',
        ]);

        $image = $request->file('image');
        if($image != "") {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path =$this->uploadImage($request);
            $producer->image = $path;
        }

        $producer->title = $request->input('title');
        $producer->location = $request->input('location');
        $producer->products = $request->input('products');
        $producer->about = $request->input('about');

        $producer->save();
        return redirect()->route('dashboard', ['id' => auth()->user()->id])->with('name', auth()->user()->name);

    }

    public function destroy(Producer $producer) {

        $this->authorize('delete', $producer);
        $producer->delete();
        return back();
    }


}
