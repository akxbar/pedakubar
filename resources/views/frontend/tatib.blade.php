@extends('app.home')
@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}\plugins\glightbox\glightbox-call.js">

<div class="page-content">
        
    <div class="page-title page-title-small dropdown">
        <h2><a href="{{ route('beranda') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
        <a href="#" data-menu="#" class="bg-fade-highlight-light shadow-xl preload-img dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
          <ul class="dropdown-menu text-center btn-xxs rounded-s bg-orange-light" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#"><strong>Log Out</strong></a></li>
          </ul>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
            <div class="content">
                <h1 class="font-600 font-18 line-height-m">Tata Tertib Kegiatan</h1>
                <span class="badge text-uppercase font-14 px-2 py-1 bg-mint-dark">15th July 2024 <span class="copyright-year"></span>, 5:43 AM</span>
                <img src="{{ asset('frontend') }}/images/logopeda1.png" class="img-fluid">
            <span class="d-block text-end font-10 pe-3 opacity-60 mt-n4 color-white">Image Source: Pixabay</span>
            </div>
            <div class="content">
                <h5>Here's a Heading.</h5>
                <p>
                    Curabitur non nisi venenatis, pharetra nisl et, ullamcorper diam.
                    Morbi interdum varius molestie. Quisque feugiat augue id diam ornare auctor.
                </p>
            </div>
        </div>
</div>    

@endsection