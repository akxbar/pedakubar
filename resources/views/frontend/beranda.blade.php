@extends('app.home')
@section('content')
        <div class="page-content">
        
        <div class="page-title page-title-large">
            <h2 data-username="Enabled (username)!" class="greeting-text"></h2>
            <a href="#" data-menu="menu-warning-1" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
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
        
        <!-- Homepage Slider-->
        <div class="splide single-slider slider-no-arrows slider-no-dots homepage-slider" id="single-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div class="card card-style" style="background-image:url({{ asset('frontend') }}/images/pictures/pedashow.png)" data-card-height="320">
                            <div class="card-bottom">
                                <h1 class="font-24 font-700 text-center"></h1>
                                <p class="boxed-text-xl mx-2 ">Logo Resmi Pekan Daerah (PEDA) KTNA Kalimantan Timur XI Tahun 2025</p>
                                {{-- <p class="boxed-text-xl">
                                    MELALUI PEKAN DAERAH XI PETANI NELAYAN PROVINSI KALIMANTAN TIMUR TAHUN 2025 KITA TINGKATKAN DAYA SAING DAN PRODUK UNGGULAN PETANI NELAYAN MENDUKUNG KALIMANTAN TIMUR 
                                    SEBAGAI PENYANGGA IBUKOTA NUSANTARA
                                </p> --}}
                            </div>
                            <div class="card-overlay bg-gradient-fade "></div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card card-style" style="background-image:url({{ asset('frontend') }}/images/pictures/kubar2.jpg)" data-card-height="320">
                            <div class="card-bottom">
                                <h1 class="font-24 font-700 text-center">Meet Azures</h1>
                                <p class="boxed-text-xl">
                                    Azures brings beauty and colors to your Mobile device with a stunning user interface to match.
                                </p>
                            </div>
                            <div class="card-overlay bg-gradient-fade"></div>
                        </div>
                    </div>
                    <div class="splide__slide">
                        <div class="card card-style" style="background-image:url({{ asset('frontend') }}/images/pictures/kubar3.jpg)" data-card-height="320">
                            <div class="card-bottom">
                                <h1 class="font-24 font-700 text-center">Meet Azures</h1>
                                <p class="boxed-text-xl">
                                    Azures brings beauty and colors to your Mobile device with a stunning user interface to match.
                                </p>
                            </div>
                            <div class="card-overlay bg-gradient-fade"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content mt-0">
                <div class="card card-style bg-fade-green-dark ">
                    <div class="content text-center font-800">
                        <h3>Selamat Datang di PEDA KTNA Provinsi Kalimantan Timur XI Tahun 2025</h3>
                        <p>
                            MELALUI PEKAN DAERAH XI PETANI NELAYAN PROVINSI KALIMANTAN TIMUR TAHUN 2025 <br> KITA TINGKATKAN DAYA SAING DAN PRODUK UNGGULAN PETANI NELAYAN MENDUKUNG KALIMANTAN TIMUR 
                            SEBAGAI PENYANGGA IBUKOTA NUSANTARA
                        </p>
                    </div>
                </div>

                <div class="card card-style">
                    <div class="content">
                        <h4 class="bolder text-center font-800 ">Sekretariat PEDA KTNA Provinsi Kalimantan Timur XI Tahun 2025 </h4>
                        <p class="text-center font-700 pb-1">Kawasan Perkantoran Bisnis Center Sendawar, Kecamatan Barong Tongkok, Kabupaten Kutai Barat
                        </p>
                        <div class="collapse" id="collapse-8">
                            <div class="card card-style">
                                <div class="content">
                                    
                                    <div class="list-group list-custom-small">
                                        <a href="tel:+1 234 567 890">
                                            <i class="fa font-18 fa-phone color-phone"></i>
                                            <span>+1 234 567 8900</span>
                                            <span class="badge bg-highlight rounded-xs color-white fa font-10">TAP TO CALL</span>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                        <a href="https://wa.me/+1234567890">
                                            <i class="fa font-18 fab fa-whatsapp color-whatsapp"></i>
                                            <span>+1 234 567 8900</span>
                                            <span class="badge bg-highlight rounded-xs color-white fa font-10">TAP TO WHATSAPP</span>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                        <a href="mailto:mail@domain.com">
                                            <i class="fa font-18 fa-envelope color-mail"></i>
                                            <span>mail@domain.com</span>
                                            <span class="badge bg-highlight rounded-xs color-white fa font-10">TAP TO MAIL</span>
                                            <i class="fa fa-angle-right"></i>
                                        </a>                    
                                    </div>                                  
                                </div>
                            </div>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapse-8" class="btn btn-m btn-full rounded-sm bg-highlight font-700 shadow-xl text-uppercase">Contact Us</a>
                    </div>    
                </div>

        </div>

		<div class="divider divider-margins mt-4"></div>

        <div class="row mb-0">
            <div class="col-6 pe-0">
                <div class="card card-style me-2">
                    <a data-card-height="150" class="card preload-img mb-3" data-src="{{ asset('frontend') }}/images/pictures/25.jpg"  href="#">
                        <div class="card-bottom ms-3 mb-2">
                            <h4 class="color-white font-600">Sambutan Selamat Datang</h4>
                        </div>
                        <div class="card-overlay bg-gradient rounded-0"></div>
                    </a>
                    <div class="content mt-0">
                        <p>
                            A small description about your project goes here. Then, you can access the portfolio project to see it in detail.
                        </p>
                        <a href="{{ route('sambutan') }}" class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-6 ps-0">
                <div class="card card-style ms-2">
                    <a data-card-height="150" class="card preload-img mb-3" data-src="{{ asset('frontend') }}/images/pictures/26.jpg"  href="#">
                        <div class="card-bottom ms-3 mb-2">
                            <h4 class="color-white font-600 ">Tata Tertib Kegiatan</h4>
                        </div>
                        <div class="card-overlay bg-gradient rounded-0"></div>
                    </a>
                    <div class="content mt-0">
                        <p>
                            A small description about your project goes here. Then, you can access the portfolio project to see it in detail.
                        </p>
                        <a href="{{ route('tatib') }}" class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-6 pe-0">
                <div class="card card-style me-2">
                    <a data-card-height="150" class="card preload-img mb-3" data-src="{{ asset('frontend') }}/images/pictures/28.jpg"  href="#">
                        <div class="card-bottom ms-3 mb-2">
                            <h4 class="color-white font-600 ">Profil Kegiatan</h4>
                        </div>
                        <div class="card-overlay bg-gradient rounded-0"></div>
                    </a>
                    <div class="content mt-0">
                        <p>
                            A small description about your project goes here. Then, you can access the portfolio project to see it in detail.
                        </p>
                        <a href="{{ route('profilkeg') }}" class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-6 ps-0">
                <div class="card card-style ms-2">
                    <a data-card-height="150" class="card preload-img mb-3" data-src="{{ asset('frontend') }}/images/pictures/24.jpg"  href="#">
                        <div class="card-bottom ms-3 mb-2">
                            <h4 class="color-white font-600 ">Selayang Pandang Kubar</h4>
                        </div>
                        <div class="card-overlay bg-gradient rounded-0"></div>
                    </a>
                    <div class="content mt-0">
                        <p>
                            A small description about your project goes here. Then, you can access the portfolio project to see it in detail.
                        </p>
                        <a href="https://youtu.be/NuxBxy0iDoc?si=wf8J1BCLqjXgou3t" class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Read More</a>
                    </div>
                </div>
            </div>
        </div>
          
        <div class="content mb-2 pt-3">
			<h5 class="float-start font-28 font-600 mb-3">🔥 Berita Terkini</h5>
			<a class="float-end font-18 color-highlight mt-n1 pe-4" href="#">View All</a>
			<div class="clearfix"></div>
		</div>

        <div class="card card-style">
            <div class="content mb-0">

                <a href="{{ route('berita') }}">
                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <h5 class="font-500 font-20 pb-1">Gorgeous ideas to create your next mobile website with</h5>
                            <span class="badge text-uppercase font-16 px-2 py-1 bg-orange-dark">25 Minutes Ago</span>
                        </div>
                        <div class="align-self-center ms-auto">
                            <img src="{{ asset('frontend') }}/images/pictures/15s.jpg" class="rounded-m ms-3" width="90">
                        </div>
                    </div>
                </a>
                <div class="divider mb-3"></div>
                <a href="{{ route('berita') }}">
                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <h5 class="font-500 font-20 pb-1">What's the next best gadget to come from Apple in <span class="copyright-year"></span>?</h5>
                            <span class="badge text-uppercase font-16 px-2 py-1 bg-orange-dark">45 Minutes Ago</span>
                        </div>
                        <div class="align-self-center ms-auto">
                            <img src="{{ asset('frontend') }}/images/pictures/28s.jpg" class="rounded-m ms-3" width="90">
                        </div>
                    </div>
                </a>
                <div class="divider mb-3"></div>
                <a href="{{ route('berita') }}">
                    <div class="d-flex mb-3">
                        <div class="align-self-center">
                            <h5 class="font-500 font-20 pb-1">Laptops are still outselling Mobile Devices? Well,  think again!</h5>
                            <span class="badge text-uppercase font-16 px-2 py-1 bg-orange-dark">50 Minutes Ago</span>
                        </div>
                        <div class="align-self-center ms-auto">
                            <img src="{{ asset('frontend') }}/images/pictures/21s.jpg" class="rounded-m ms-3" width="90">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="card card-style">
            <div class="content text-center font-800">
                <h4>Galery Foto dan Video</h4>
            </div>
            <div class="row mb-0 p-4 ">
                <div class="col-6 pe-0">
                    <div class="card card-style me-2" data-card-height="380" style="background-image:url({{ asset('frontend') }}/images/food/7.jpg)">
                        <div class="card-bottom bg-white m-2 p-3 rounded-s">
                            <span class="badge bg-red-dark d-inline-block mb-2 text-uppercase font-11 mt-n2  rounded-s">Galery Foto</span>
                            <h5 class="font-500 pt-2">
                                Galery Foto Kegiatan
                            </h5>
                            <div class="clearfix"></div>
                            <a href="{{ route('foto') }}" class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 pe-0">
                    <div class="card card-style me-2" data-card-height="380" style="background-image:url({{ asset('frontend') }}/images/food/7.jpg)">
                        <div class="card-bottom bg-white m-2 p-3 rounded-s">
                            <span class="badge bg-red-dark d-inline-block mb-2 text-uppercase font-11 mt-n2  rounded-s font-800">Galery Video</span>
                            <h5 class="font-500 pt-2">
                                Galery Video Kegiatan
                            </h5>
                            <div class="clearfix"></div>
                            <a href="#link youtube" class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Selengkapnya</a>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>

        <div id="menu-main"
        class="menu menu-box-right menu-box-detached rounded-m"
        data-menu-width="260"
        data-menu-load="menu-main.html"
        data-menu-active="nav-features"
        data-menu-effect="menu-over">
   </div>


        <!-- footer and footer card-->
        {{-- <div class="footer" data-menu-load="menu-footer.html"></div>   --}}
    </div> 
@endsection