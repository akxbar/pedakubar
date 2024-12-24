@extends('app.home')
@section('content')

<div class="page-content" style="min-height:60vh!important">
    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button></a>Direktori</h2>
        <a href="#" data-menu="menu-warning-1" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

        <!--Menu Warning-->
    <!---------------->
    <!---------------->
    <div id="menu-warning-1" class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-height="10"
         data-menu-effect="menu-over">
         <h1 class="text-center mt-5 text-uppercase font-700">Log Out!</h1>
         <img class="mx-auto mb-3 text-center" src="{{ asset('frontend') }}/images/logopeda2.png" width="100">
        <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-700 bg-red-light">Log Out</a>
    </div>
    <!---------------->
    <!---------------->
        

    <div class="card card-style">
        <div class="content">
            <h4>Direktori Informasi</h4>
            <p>
                Simple link list that can get tapped to reveal more content. We used links in our example, you can use anything you want.
            </p>
        </div>
    </div>


    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-blue-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-5">
                <i class="fa fa-medkit color-white"></i>
                <span class="font-14 color-white">Fasilitas Kesehatan</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-5">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-home color-green-dark"></i>
                    <span>Rumah Sakit Umum</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-suitcase color-brown-light"></i>
                    <span>Klinik</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-building color-gray-dark"></i>
                    <span>Puskesmas</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-building color-gray-dark"></i>
                    <span>Puskesmas Pembantu</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-blue-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-6">
                <i class="fa-solid fa-hands-praying color-white"></i>
                <span class="font-14 color-white">Rumah Ibadah</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-6">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-mosque color-gray-dark"></i>
                    <span>Masjid</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-church color-gray-dark"></i>
                    <span>Gereja</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fas fa-vihara color-gray-dark"></i>
                    <span>Wihara</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-blue-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-7">
                <i class="fa fa-building color-white"></i>
                <span class="font-14 color-white">Hotel</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-7">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-building color-gray-dark"></i>
                    <span>Hotel Amanda</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-building color-gray-dark"></i>
                    <span>Hotel Loveta</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fa-building color-gray-dark"></i>
                    <span>Hotel Amar</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-mint-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-71">
                <i class="fa fa-building color-white"></i>
                <span class="font-14 color-white">Bank & ATM</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-71">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-university color-gray-dark"></i>
                    <span>Bank Mandiri</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-credit-card color-gray-dark"></i>
                    <span>ATM BPD</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-credit-card color-gray-dark"></i>
                    <span>ATM Mandiri</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-credit-card color-gray-dark"></i>
                    <span>ATM BRI</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-mint-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-8">
                <i class="fa fa-car color-white"></i>
                <span class="font-14 color-white">Transpotasi</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-8">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-building color-gray-dark"></i>
                    <span>Pesawat</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-building color-gray-dark"></i>
                    <span>Speedboad </span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-bus color-gray-dark"></i>
                    <span>Tavel Agent</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-taxi color-gray-dark"></i>
                    <span>Tavel Carteran</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-car color-gray-dark"></i>
                    <span>Mobil Lepas Kunci</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-motorcycle color-gray-dark"></i>
                    <span>Sewa Motor</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-mint-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-91">
                <i class="fa-solid fa-solid fa-gas-pump color-white"></i>
                <span class="font-14 color-white">SPBU</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-91">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-solid fa-gas-pump color-gray-dark"></i>
                    <span>SPBU Lebak Cilong</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-solid fa-gas-pump color-gray-dark"></i>
                    <span>SPBU Resak</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#"  data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-solid fa-gas-pump color-gray-dark"></i>
                    <span>SPBU Muara Lawa</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-green-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-9">
                <i class="fa-solid fa-cart-shopping color-white"></i>
                <span class="font-14 color-white">Perbelanjaan</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-9">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-cart-shopping color-gray-dark"></i>
                    <span>Pasar</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-cart-shopping color-gray-dark"></i>
                    <span>Minimarket</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#"  data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-cart-shopping color-gray-dark"></i>
                    <span>Indomaret</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-green-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-10">
                <i class="fa-solid fa-utensils color-white"></i>
                <span class="font-14 color-white">Kuliner</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-10">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-utensils color-green-dark"></i>
                    <span>Warung Acil</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-utensils color-brown-light"></i>
                    <span>Warungku</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fas fa-coffee color-gray-dark"></i>
                    <span>Cafe Kopi</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-green-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-11">
                <i class="fa-solid fa-gift color-white"></i>
                <span class="font-14 color-white">Souvenir</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-11">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-gift color-green-dark"></i>
                    <span>Toko Mandau</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-gift color-brown-light"></i>
                    <span>Toko Ramuan</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-gift color-gray-dark"></i>
                    <span>Toko Oleh-oleh</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-yellow-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-12">
                <i class="fas fa-umbrella-beach color-white"></i>
                <span class="font-14 color-white">Wisata dan Hiburan</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-12">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fas fa-umbrella-beach color-green-dark"></i>
                    <span>Air Terjun Jantur</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fas fa-umbrella-beach color-brown-light"></i>
                    <span>Danau Aco</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fas fa-umbrella-beach color-gray-dark"></i>
                    <span>Taman Kota</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-yellow-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-13">
                <i class="fa-solid fa-house color-white"></i>
                <span class="font-14 color-white">BPP</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-13">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-house color-gray-dark"></i>
                    <span>BPP Bongan</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-house color-gray-dark"></i>
                    <span>BPP Camp Baru</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-housefa-solid fa-house color-gray-dark"></i>
                    <span>BPP Siluq Ngurai</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-housefa-solid fa-house color-gray-dark"></i>
                    <span>BPP Muara Lawa</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-housefa-solid fa-house color-gray-dark"></i>
                    <span>BPP Keay</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 bg-yellow-dark ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-14">
                <i class="fa-solid fa-location-dot color-white"></i>
                <span class="font-14 color-white">Rest Area</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-14">
            <div class="list-group list-custom-small">
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-location-dot color-gray-dark"></i>
                    <span>Warung AA</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-location-dot color-gray-dark"></i>
                    <span>Warung BB</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="border-0" data-menu="menu-maps">
                    <i class="fa font-13 fa-solid fa-location-dot color-gray-dark"></i>
                    <span>SPBU AA</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>

</div>

<div id="menu-maps" class="menu menu-box-modal rounded-m"
data-menu-height="500"
data-menu-width="400">
<div class="card card-style mt-3">
    {{-- <div data-card-height="200" class="card shadow-l mb-0 bg-18 mt-4">
        <div class="card-overlay bg-gradient opacity-90"></div>
    </div> --}}
    <div class="content mb-0">
        <div class="float-start">
            <div class="divider divider-margins"></div>
            <div class="mt-0">
                <img src="{{ asset('frontend') }}/images/pictures/11w.jpg" class="img-fluid rounded-sm shadow-xl">
            </div>
            <h1 class="mb-n1 mt-2">Rumah Sakit Umum</h1>
            <p class="font-10 mb-1 pb-1"><i class="fa fa-map-marker-alt me-2"></i>Melbourne Victoria, Collins Street</p>
            <p class="font-10 mb-1 pb-1"><i class="fa fa-phone me-2"></i>+6212345678</p>
            <a href="https://maps.app.goo.gl/ub84abKv1tUMijYu5" class="float-end btn btn-s bg-highlight rounded-xl shadow-xl text-uppercase font-900 font-11 mb-3">View on Map</a>
        </div>
        
    </div>
</div>

{{-- modal --}}
<div class="card card-style bg-theme pb-0">
    <div class="content" id="tab-group-2">
        <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-blue-dark">
            <a href="#" data-active data-bs-toggle="collapse" data-bs-target="#tab-5">Informasi</a>
            <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-7">Foto</a>
        </div>
        <div class="clearfix mb-3"></div>
        <div data-bs-parent="#tab-group-2" class="collapse show" id="tab-5">
            <div class="card card-style">
                <div class="content">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Curabitur aliquam non nunc quis maximus.
                        Fusce volutpat arcu id ante maximus vestibulum.
                        Curabitur non nisi venenatis, pharetra nisl et, ullamcorper diam.
                        Morbi interdum varius molestie. Quisque feugiat augue id diam ornare auctor.
                    </p>                                 
                </div>
            </div>
        </div>

        <div data-bs-parent="#tab-group-2" class="collapse" id="tab-7">
            <div class="card card-style">
                <div class="content mb-3">           
                    <div class="row text-center row-cols-3 mb-0">
                        <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/27s.jpg" title="Vynil and Typerwritter">
                            <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/27s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                            <p class="font-600 pb-1">Parkiran</p>
                        </a>
                        <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/22s.jpg" title="Cream Cookie">
                            <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/22s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                            <p class="font-600 pb-1">Kamar Tidur</p>
                        </a>
                        <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/23s.jpg" title="Cookies and Flowers">
                            <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/23s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                            <p class="font-600 pb-1">Dapur</p>
                        </a>
                        <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/24s.jpg" title="Pots and Pans">
                            <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/24s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                            <p class="font-600 pb-1">Kamar Mandi</p>
                        </a>
                        <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/25s.jpg" title="Berries are Packed with Fiber">
                            <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/25s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                            <p class="font-600 pb-1">Ruang Tamu</p>
                        </a>
                        <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/26s.jpg" title="A beautiful Retro Camera">
                            <img src="{{ asset('frontend') }}/images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/26s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                            <p class="font-600 pb-1">Laundry</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>


<a href="#" class="close-menu btn btn-center-m btn-sm shadow-l rounded-s text-uppercase font-900 bg-red-dark mt-1 mb-2">Tutup</a>
</div>

@endsection