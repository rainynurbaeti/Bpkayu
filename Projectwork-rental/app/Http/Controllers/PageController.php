<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('tentangkami'); // Sesuaikan dengan nama file view
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function articles()
    {
        return view('artikel');
    }

    public function contact()
    {
        return view('contact');
    }
}

