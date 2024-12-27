<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Event;
use App\Models\Video;
use App\Models\Berita;

use App\Models\Header;
use App\Models\Halaman;
use App\Models\Kategori;
use App\Models\ContactUs;
use App\Models\Direktori;
use App\Models\Pemondokan;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use App\Models\PenangungJawab;
use App\Models\TempatPemondokan;
use App\Models\KategoriDirektori;
use Illuminate\Support\Facades\Storage;

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
        $slides =  Header::where('publish', 1)->get();
        $kontak =  ContactUs::first();
        $halaman = Halaman::where('publish', 1)->get();
        $berita = Berita::where('publish', 1)->latest()->simplePaginate(3);
        $foto = Foto::latest()->first();
        $video = Video::first();
        // dd($kontak);
        return view('web.beranda', compact('slides', 'kontak', 'halaman', 'berita', 'foto', 'video'));
    }



    public function pemondokan()
    {

        $lokasis = TempatPemondokan::where('publish', 1)->latest()->get();
        $pemondokans = Pemondokan::where('publish', 1)->latest()->get();
        $penangungjawabs = PenangungJawab::where('publish', 1)->get();
        // dd($lokasis);

        return view('web.pemondokan.pemondokan', compact('lokasis', 'pemondokans', 'penangungjawabs'));
    }



    public function direktori()
    {
        $kategoris = KategoriDirektori::where('active', 1)->orderBy('sort','asc')->get();

        $direktoris = Direktori::where('publish', 1)->orderBy('id','asc')->get();
        return view('web.direktori.direktori', compact('kategoris','direktoris'));
    }


    public function page($id)
    {

        $post = Halaman::where('publish', 1)->where('id', $id)->first();
        return view('web.page', compact('post'));
    }


    public function selengkapnya($id)
    {

        $post = Berita::where('publish', 1)->where('id', $id)->first();
        return view('web.selengkapnya', compact('post'));
    }



    public function arsipberita()
    {
        $posts = Berita::where('publish', 1)->latest()->paginate(10);
        return view('web.arsipberita', compact('posts'));
    }


    public function foto()
    {
        $foto1 = Foto::where('kat_id', 1)->latest()->get();
        $foto2 = Foto::where('kat_id', 2)->latest()->get();
        $foto3 = Foto::where('kat_id', 3)->latest()->get();
        $foto4 = Foto::where('kat_id', 4)->latest()->get();
        $foto5 = Foto::where('kat_id', 5)->latest()->get();
        $foto6 = Foto::where('kat_id', 6)->latest()->get();

        return view('web.foto', compact('foto1', 'foto2', 'foto3', 'foto4', 'foto5', 'foto6'));
    }



    public function event()
      {
            $kategoris = Kategori::where('publish', 1)->get();
            $events = Event::where('publish', 1)->latest()->get();

            return view('web.event.event', compact('kategoris', 'events'));

        }


        public function evendetail($id)
        {
            return view('web.event.evendetail', [
                'event' => Event::where('publish', 1)->findOrFail($id),
            ]);
        }


        public function download($file)
        {
dd($file);
            $filePath = 'storage/' . $file; // Sesuaikan path file Anda

            if (Storage::exists($filePath)) {
                return response()->download($filePath);
            }

            return redirect()->back()->with('error', 'File not found.');
        }

}



