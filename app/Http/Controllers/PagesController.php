<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function terms()
    {
        return view('terms');
    }

    public function search()
    {
        return view('search');
    }
    public function searchImage(Request $request)
    {
        $link = $request->link;
        $url = "https://cse.google.com/cse?cx=40e48c56f76734d05#gsc.tab=0&gsc.q=".$link;
        return redirect()->away($url);
    }
    public function dropzoneFileUpload(Request $request)
    {
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);
        $url = "https://cse.google.com/cse?cx=40e48c56f76734d05#gsc.tab=0&gsc.q=https://runam.test/images/".$imageName;

//        return redirect()->away($url);
        return response()->json(['success'=>$imageName]);
    }
}
