<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recept;

class ReceptController extends Controller
{
    public function indexRecepti()
    {
        $recepti = Recept::orderBy('created_at','desc' )->take(9)->get();
        return view('pages.recepti', compact('recepti'));
    }

    public function index() {

        $recepti = Recept::all();
        return view('recepti.index', compact('recepti'));
    }

    public function create() {

        return view('recepti.create');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'complexity' => 'required',
            'short_description' => 'required',
            'ingredients' => 'required',
            'preparation' => 'required',
            'dish_type' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = $this->uploadImage($request);

        $request->user()->recepti()->create([
            'title' => $request->title,
            'complexity' => $request->complexity,
            'short_description' => $request->short_description,
            'ingredients' => $request->ingredients,
            'preparation' => $request->preparation,
            'dish_type' => $request->dish_type,
            'image' => $path,
        ]);

        return redirect()->route('dashboard');
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

    public function show($id) {
        $recept = Recept::find($id);
        return view('recepti.show', compact('recept'));
        //return view('recepti.show', ['recept' =>$recept]);
    }

    public function edit($id) {
        $recept = Recept::find($id);
        return view('recepti.update', compact('recept'));

    }

    public function updateRecept(Request $request, $id) {

        $recept = Recept::find($id);

        $this->validate($request, [
            'title' => 'required',
            'complexity' => 'required',
            'short_description' => 'required',
            'ingredients' => 'required',
            'preparation' => 'required',
            'dish_type' => 'required',
        ]);

        $image = $request->file('image');
        if($image != "") {
            $this->validate($request, [
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path =$this->uploadImage($request);
            $recept->image = $path;
        }

        $recept->title = $request->input('title');
        $recept->complexity = $request->input('complexity');
        $recept->short_description = $request->input('short_description');
        $recept->ingredients = $request->input('ingredients');
        $recept->preparation = $request->input('preparation');
        $recept->dish_type = $request->input('dish_type');

        $recept->save();
        return redirect()->route('dashboard')->with('success', 'Recept je uspjesno azuriran');

    }

    public function destroy(Recept $recept) {

        $this->authorize('delete', $recept);
        $recept->delete();
        return back();
    }

}
