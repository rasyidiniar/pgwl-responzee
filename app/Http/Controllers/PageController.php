<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(Request $request)
    {
        $title = ' Tentang Grebeg Sudiro';
        return view('about', compact('title'));
    }
}
