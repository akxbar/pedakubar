@extends('app.home')
@section('content')


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
                <h5 class="font-18 font-600 color-highlight pb-3">Arsip Berita</h5>
                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <h5 class="font-500 font-15 pb-1">Gorgeous ideas to create your next mobile website with</h5>
                            <a href="{{ route('berita') }}">
                            <span class="badge text-uppercase px-2 py-1 bg-mint-dark">Selengkapnya</span>
                        </a>
                            <span class="color-theme font-11 ps-2 opacity-50">25 Minutes Ago</span>
                        </div>
                        <div class="align-self-center ms-auto">
                            <img src="{{ asset('frontend') }}/images/pictures/15s.jpg" class="rounded-m ms-3" width="90">
                        </div>
                    </div>
 
                <div class="divider mb-3"></div>

                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <img src="{{ asset('frontend') }}/images/pictures/28s.jpg" class="rounded-m me-3" width="90">
                        </div>
                        <div class="align-self-center ms-auto">
                            <h5 class="font-500 font-15 pb-1">What's the next best gadget to come from Apple in <span class="copyright-year"></span>?</h5>
                            <a href="{{ route('berita') }}">
                            <span class="badge text-uppercase px-2 py-1 bg-mint-dark">Selengkapnya</span>
                            </a>
                            <span class="color-theme font-11 ps-2 opacity-50">25 Minutes Ago</span>
                        </div>
                    </div>
                <div class="divider mb-3"></div>
                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <h5 class="font-500 font-15 pb-1">Laptops are still outselling Mobile Devices? Well,  think again!</h5>
                            <a href="{{ route('berita') }}">
                                <span class="badge text-uppercase px-2 py-1 bg-mint-dark">Selengkapnya</span>
                                </a>
                            <span class="color-theme font-11 ps-2 opacity-50">25 Minutes Ago</span>
                        </div>
                        <div class="align-self-center ms-auto">
                            <img src="{{ asset('frontend') }}/images/pictures/21s.jpg" class="rounded-m ms-3" width="90">
                        </div>
                    </div>a>
                <div class="divider mb-3"></div>
                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <img src="{{ asset('frontend') }}/images/pictures/28s.jpg" class="rounded-m me-3" width="90">
                        </div>
                        <div class="align-self-center ms-auto">
                            <h5 class="font-500 font-15 pb-1">What's the next best gadget to come from Apple in <span class="copyright-year"></span>?</h5>
                            <a href="{{ route('berita') }}">
                                <span class="badge text-uppercase px-2 py-1 bg-mint-dark">Selengkapnya</span>
                                </a>
                            <span class="color-theme font-11 ps-2 opacity-50">25 Minutes Ago</span>
                        </div>
                    </div>

                <div class="divider mb-3"></div>
                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <h5 class="font-500 font-15 pb-1">Laptops are still outselling Mobile Devices? Well,  think again!</h5>
                            <a href="{{ route('berita') }}">
                                <span class="badge text-uppercase px-2 py-1 bg-mint-dark">Selengkapnya</span>
                                </a>
                            <span class="color-theme font-11 ps-2 opacity-50">25 Minutes Ago</span>
                        </div>
                        <div class="align-self-center ms-auto">
                            <img src="{{ asset('frontend') }}/images/pictures/21s.jpg" class="rounded-m ms-3" width="90">
                        </div>
                    </div>
                <div class="divider mb-3"></div>
                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <img src="{{ asset('frontend') }}/images/pictures/28s.jpg" class="rounded-m me-3" width="90">
                        </div>
                        <div class="align-self-center ms-auto">
                            <h5 class="font-500 font-15 pb-1">What's the next best gadget to come from Apple in <span class="copyright-year"></span>?</h5>
                            <a href="{{ route('berita') }}">
                                <span class="badge text-uppercase px-2 py-1 bg-mint-dark">Selengkapnya</span>
                                </a>
                            <span class="color-theme font-11 ps-2 opacity-50">25 Minutes Ago</span>
                        </div>
                    </div>
                <div class="divider mb-3"></div>
                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <h5 class="font-500 font-15 pb-1">Laptops are still outselling Mobile Devices? Well,  think again!</h5>
                            <a href="{{ route('berita') }}">
                                <span class="badge text-uppercase px-2 py-1 bg-mint-dark">Selengkapnya</span>
                                </a>
                            <span class="color-theme font-11 ps-2 opacity-50">25 Minutes Ago</span>
                        </div>
                        <div class="align-self-center ms-auto">
                            <img src="{{ asset('frontend') }}/images/pictures/21s.jpg" class="rounded-m ms-3" width="90">
                        </div>
                    </div>
            </div>
    </div>

    <nav aria-label="pagination-demo">
        <ul class="pagination pagination- justify-content-center">
            <li class="page-item">
                <a class="page-link rounded-xs color-white bg-black shadow-xl border-0" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-angle-right"></i></a>
            </li>
            <li class="page-item"><a class="page-link rounded-xs color-black bg-theme shadow-xl border-0" href="#">1</a></li>
            <li class="page-item"><a class="page-link rounded-xs color-black bg-theme shadow-xl border-0" href="#">2</a></li>
            <li class="page-item active"><a class="page-link rounded-xs color-black shadow-xl border-0" href="#">3</a></li>
            <li class="page-item"><a class="page-link rounded-xs color-black bg-theme shadow-xl border-0" href="#">4</a></li>
            <li class="page-item"><a class="page-link rounded-xs color-black bg-theme shadow-xl border-0" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link rounded-xs color-white bg-black shadow-xl border-0" href="#"><i class="fa fa-angle-left"></i></a>
            </li>
        </ul>
    </nav>

</div>    

@endsection