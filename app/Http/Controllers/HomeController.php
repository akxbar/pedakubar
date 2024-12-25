<?php

namespace App\Http\Controllers;

use App\Models\Pemondokan;
use App\Models\PenangungJawab;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\TempatPemondokan;

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



    public function pemondokan()
    {

        $lokasis = TempatPemondokan::where('publish', 1)->latest()->get();
        $pemondokans = Pemondokan::where('publish', 1)->latest()->get();
        $penangungjawabs = PenangungJawab::where('publish', 1)->get();
        // dd($lokasis);

        return view('web.pemondokan.pemondokan', compact('lokasis', 'pemondokans', 'penangungjawabs'));
    }

}
