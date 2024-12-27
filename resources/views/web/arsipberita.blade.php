@extends('app.home')
@section('content')


<div class="page-content">

    <div class="page-title page-title-small dropdown">
        <h2><a href="{{ route('beranda') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
        @include('web.logout')
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
            <div class="content">
                <h5 class="font-18 font-600 color-highlight pb-3">Arsip Berita</h5>

@foreach ( $posts as $item )

         @if ($item->id % 2 == 0)

                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <h5 class="font-500 font-15 pb-1">{{$item->title}}</h5>
                            <a href="{{ route('selengkapnya',[$item->id]) }}">
                            <span class="badge text-uppercase px-2 py-1 bg-mint-dark">Selengkapnya</span>
                        </a>
                            <span class="color-theme font-11 ps-2 opacity-50">{{$item->tanggal->format('d M Y')}}</span>
                        </div>
                        <div class="align-self-center ms-auto">
                            <img src="{{ asset('storage') }}/{{ $item->image }}" class="rounded-m ms-3" width="90">
                        </div>
                    </div>
                    <div class="divider mb-3"></div>
                    @else


                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <img src="{{ asset('storage') }}/{{ $item->image }}" class="rounded-m me-3" width="90">
                        </div>
                        <div class="align-self-center ms-auto">
                            <h5 class="font-500 font-15 pb-1">{{$item->title}}</h5>
                            <a href="{{ route('selengkapnya',[$item->id]) }}">
                            <span class="badge text-uppercase px-2 py-1 bg-mint-dark">Selengkapnya</span>
                            </a>
                            <span class="color-theme font-11 ps-2 opacity-50">{{$item->tanggal->format('d M Y')}}</span>
                        </div>
                    </div>
                <div class="divider mb-3"></div>

                @endif
                @endforeach

            </div>
    </div>

    <nav aria-label="pagination-demo">
        <ul class="pagination pagination- justify-content-center">
            <!-- <li class="page-item">
                <a class="page-link rounded-xs color-white bg-black shadow-xl border-0" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-angle-right"></i></a>
            </li>
            <li class="page-item"><a class="page-link rounded-xs color-black bg-theme shadow-xl border-0" href="#">1</a></li>
            <li class="page-item"><a class="page-link rounded-xs color-black bg-theme shadow-xl border-0" href="#">2</a></li>
            <li class="page-item active"><a class="page-link rounded-xs color-black shadow-xl border-0" href="#">3</a></li>
            <li class="page-item"><a class="page-link rounded-xs color-black bg-theme shadow-xl border-0" href="#">4</a></li>
            <li class="page-item"><a class="page-link rounded-xs color-black bg-theme shadow-xl border-0" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link rounded-xs color-white bg-black shadow-xl border-0" href="#"><i class="fa fa-angle-left"></i></a>
            </li> -->
            {{ $posts->links() }}

        </ul>
    </nav>

</div>

@endsection
