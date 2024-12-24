<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function pengumuman()
    {

        $posts = Pengumuman::where('publish', 1)->latest()->simplePaginate(6);

        return view('web.pengumuman.pengumuman', compact('posts'));
    }


    public function beranda()
    {

        return view('web.beranda');
    }
}
