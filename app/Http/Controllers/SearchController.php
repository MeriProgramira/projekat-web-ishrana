<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /* public function search(Request $request)
    {
        $keyword = $request->keyword;
        //check if method is POST or use keyword from GET method
        if (isset($keyword)) {
            if (strlen($keyword) < 4) {
                $message = 'Za pretragu molimo unesite minimalno 4 karaktera';
                return view('search', compact('message'));
            }else{
                $data = Post::where('title','LIKE','%'.$keyword.'%')->orWhere('content','LIKE','%'.$keyword.'%')->get();
                return view('search',compact('data'));
            }

        } else {
            return redirect()->route('home');
        }

    } */
}
