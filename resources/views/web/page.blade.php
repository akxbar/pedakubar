@extends('app.home')
@section('content')

<div class="page-content">

    <div class="page-title page-title-small dropdown">
        <h2><a href="{{ route('beranda') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
        @include('web.logout')
    </div>
@if ($post->image)
@php
       $image = '/storage/'.$post->image;
@endphp

@endif

    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="/frontend/images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
            <div class="content">
                <h1 class="font-600 font-18 line-height-m">{{$post->title}}</h1>
                <span class="badge text-uppercase font-14 px-2 py-1 bg-mint-dark">{{$post->created_at->format('d F Y')}} <span class="copyright-year"></span></span>
                <img src="{{$image??'/images/logopeda1.png'}}" class="img-fluid">
            <span class="d-block text-end font-10 pe-3 opacity-60 mt-n4 color-white"></span>
            </div>
            <div class="content">
                <h5>{{$post->title}} </h5>
                <br>

                    {!! $post->body !!}
            </div>
        </div>
</div>

@endsection
