<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Namirnica;

class NamirnicaController extends Controller


{

    public function indexNamirnica()
    {
        $namirnice = Namirnica::orderBy('created_at','desc' )->take(3)->get();
        return view('pages.namirnice', compact('namirnice'));
    }

    public function index()
    {
        $namirnice = Namirnica::orderBy('created_at','desc' )->get();
        return view('namirnice.index', compact('namirnice'));
    }

    public function store(Request $request)
    {
        //dd('create');
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'type' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $path = $this->uploadImage($request);

        $request->user()->namirnice()->create([
            'title' => $request->title,
            'content' => $request->content,
            'type' => $request->type,
            'content1' => $request->content1,
            'image' => $path,
        ]);

        //return redirect()->route('home');

        return redirect()->route('dashboard', ['id' => auth()->user()->id])->with('name', auth()->user()->name)->with('success', 'Namirnica je uspjesno kreirana');
    }

    public function create()
    {

        return view('namirnice.create');
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

        $namirnica = Namirnica::find($id);
        return view('namirnice.update', compact('namirnica'));

    }

    public function updateNamirnica(Request $request, $id) {

        $namirnica = Namirnica::find($id);

        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'type' => 'required',
        ]);

        $image = $request->file('image');
        if($image != "") {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path =$this->uploadImage($request);
            $namirnica->image = $path;
        }

        $namirnica->title = $request->input('title');
        $namirnica->content = $request->input('content');
        $namirnica->type = $request->input('type');
        $namirnica->content1 = $request->input('content1');

        $namirnica->save();

        return redirect()->route('dashboard', ['id' => auth()->user()->id])->with('name', auth()->user()->name);


        //->with('success', 'Namirnica je uspjesno azurirana');

    }

    public function destroy(Namirnica $namirnica) {

        $this->authorize('delete', $namirnica);
        $namirnica->delete();
        return back();
    }

}


