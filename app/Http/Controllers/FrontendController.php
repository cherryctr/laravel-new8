<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Kategori;

class FrontendController extends Controller
{
    //
    
    public function index()
    {
        //
        $data = [];
        $data['kategori'] = Kategori::all();
        return view('layout.frontend.content.home-content',$data);
    }

    public function about()
    {
        //
        
        return view('layout.frontend.content.about-content');
    }

    public function services()
    {
        //
        
        return view('layout.frontend.content.services-content');
    }

    public function contact()
    {
        //
        
        return view('layout.frontend.content.contact-content');
    }
}
