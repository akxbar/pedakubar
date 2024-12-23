@extends('app.home')
@section('content')

<div class="page-content">
        
    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button></a>Welcome</h2>
        <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>
    

                    <div data-card-height="cover-card" class="card card-style" style="background-image:url({{ asset('frontend') }}/images/pictures/kubar.jpg)">
                        <div class="card-center text-center">
                            <h1 class="mb-5"><img src="{{ asset('frontend') }}/images/pictures/logokubar.png" class="me-3 rounded-circle shadow-l bg-fade-red-dark" width="200"></i></h1>
                            <h1 class="color-white bolder fa-2x">PEKAN DAERAH (PEDA) XI KTNA KALTIM  <br> TAHUN 2025</h1>
                            <h6 class="color-white mb-4 ">MELALUI PEKAN DAERAH XI PETANI NELAYAN PROVINSI KALIMANTAN TIMUR TAHUN 2025 KITA TINGKATKAN DAYA SAING DAN PRODUK UNGGULAN PETANI NELAYAN MENDUKUNG KALIMANTAN TIMUR 
                                SEBAGAI PENYANGGA IBUKOTA NUSANTARA</h6>

                            {{-- <div class="row mb-0 text-center">
                                <div class="col-4 pe-1">
                                   
                                </div>
                                <div class="col-4 ps-1 pe-1">
                                    <div class="row mb-0">
                                    <div class="col-2 ps-1 pe-1"> 
                                    </div>
                                    <div class="col-8 ps-1 pe-1">
                                        <a href="{{ route('beranda') }}" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-900 shadow-s bg-mint-dark">Login</a>
                                    </div>
                                    <div class="col-2 ps-1 pe-1">    
                                    </div>
                                </div>
                                </div>
                                <div class="col-4 ps-1">
                                   
                                </div>
                            </div> --}}

            <div class="content mb-0">

                <div class="row mb-0 align-content-center ">
                    <div class="col-2 ps-1 pe-1">
                        {{-- <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-700 shadow-s bg-blue-dark">Button</a> --}}
                                              
                    </div>
                    <div class="col-4 pe-1">
                        <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-700 shadow-s bg-blue-light">Login</a>
                        
                    </div>
                    <div class="col-4 ps-1">
                        <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-700 shadow-s bg-green-light">Started</a>
                
                    </div>
                    <div class="col-2 ps-1 pe-1">
                        {{-- <a href="#" class="btn btn-m btn-full mb-3 rounded-xs text-uppercase font-700 shadow-s bg-blue-dark">Button</a> --}}
                                              
                    </div>
                </div>
            </div>
                        </div>
                        
                        <div class="card-overlay bg-black opacity-60"></div>
                    </div>         

    
</div>    

@endsection