@extends('app.home')
@section('content')
        <div class="page-content">
        
        <div class="page-title page-title-large">
            <h2 data-username="Enabled (username)!" class="greeting-text"></h2>
            <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="210">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
        </div>
        
        
        <!-- Homepage Slider-->
        <div class="splide single-slider slider-no-arrows slider-no-dots homepage-slider" id="single-slider-1">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div class="card card-style" style="background-image:url({{ asset('frontend') }}/images/pictures/kubar1.jpg)" data-card-height="320">
                            <div class="card-bottom">
                                <h1 class="font-24 font-700 text-center">Meet Azures</h1>
                                <p class="boxed-text-xl">
                                    Azures brings beauty and colors to your Mobile device with a stunning user interface to match.
                                </p>
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
                {{-- <div class="col-12">
                    <a href="#" class="btn btn-full btn-m rounded-s text-uppercase font-900 shadow-xl bg-highlight">Contact Us</a>
                </div> --}}

                {{-- <div class="card card-style mb-3">
                    <div class="list-group list-custom-small list-icon-0 bg-highlight ps-3 pe-4">

                        <a data-bs-toggle="collapse" class="no-effect" href="#collapse-5">
                            <div class="font-14 color-white justify-content-center align-items-center ">Contact Us</div>
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
                </div> --}}
                <div class="divider divider-margins mt-4"></div>
                <div class="card card-style">
                    <div class="content">
                        <h4 class="bolder text-center font-800 pb-3">Sekretariat PEDA </h4>
                        <h5 class="text-center font-700 pb-3">PEDA KTNA Provinsi Kalimantan Timur XI Tahun 2025 <br> 
                            d/a. Kawasan Perkantoran Bisnis Center Sendawar, Kecamatan Barong Tongkok, Kabupaten Kutai Barat <br>
                            Telepon/Fax ........................................ <br>
                            e-mail: ............................................
                        </h5>
                        <div class="collapse" id="collapse-8">
                            <div class="card card-style">
                                <div class="content">
                                    
                                    <div data-splide='{"autoplay":false}' class="splide single-slider slider-no-arrows slider-no-dots" id="user-slider-1">
                                        <div class="splide__track">
                                            <div class="splide__list">
                                                <div class="splide__slide mx-3">
                                                    <div class="d-flex">
                                                        <div><img src="{{ asset('frontend') }}/images/avatars/1s.png" class="me-3 rounded-circle bg-fade-red-light shadow-l" width="50"></div>
                                                        <div>
                                                            <h5 class="mt-1 mb-0">Johnatan Doe</h5>
                                                            <p class="font-10 mt-n1 color-red-dark">Panitia</p>
                                                        </div>
                                                        <div class="ms-auto"><span class="slider-next badge bg-red-dark mt-2 p-2 font-8">TAP FOR MORE</span></div>
                                                    </div>
                                                </div>
                                                <div class="splide__slide mx-3">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mt-1 mb-0">Johnatan Doe</h5>
                                                            <p class="font-10 mt-n1 color-red-dark">Panitia</p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="#" class="icon icon-xs rounded-circle shadow-l bg-phone"><i class="fa fa-phone"></i></a>
                                                            <a href="#" class="icon icon-xs rounded-circle shadow-l bg-facebook me-2 ms-2"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                    
                                    <div class="divider mt-3"></div>
                    
                                    <div data-splide='{"autoplay":false}' class="splide single-slider slider-no-arrows slider-no-dots" id="user-slider-2">
                                        <div class="splide__track">
                                            <div class="splide__list">
                                                <div class="splide__slide mx-3">
                                                    <div class="d-flex">
                                                        <div><img src="{{ asset('frontend') }}/images/avatars/2s.png" class="me-3 rounded-circle bg-fade-green-dark shadow-l" width="50"></div>
                                                        <div>
                                                            <h5 class="mt-1 mb-0">Alexander Mac</h5>
                                                            <p class="font-10 mt-n1 color-green-dark">Kebersihan</p>
                                                        </div>
                                                        <div class="ms-auto"><span class="slider-next badge bg-green-dark mt-2 p-2 font-8">TAP FOR MORE</span></div>
                                                    </div>
                                                </div>
                                                <div class="splide__slide mx-3">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mt-1 mb-0">Alexander Mac</h5>
                                                            <p class="font-10 mt-n1 color-green-dark">Kebersihan</p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="#" class="icon icon-xs rounded-circle shadow-l bg-phone"><i class="fa fa-phone"></i></a>
                                                            <a href="#" class="icon icon-xs rounded-circle shadow-l bg-facebook me-2 ms-2"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                    
                                    <div class="divider mt-3"></div>
                    
                                    <div data-splide='{"autoplay":false}' class="splide single-slider slider-no-arrows slider-no-dots" id="user-slider-3">
                                        <div class="splide__track">
                                            <div class="splide__list">
                                                <div class="splide__slide mx-3">
                                                    <div class="d-flex">
                                                        <div><img src="{{ asset('frontend') }}/images/avatars/5s.png" class="me-3 rounded-circle shadow-l bg-fade-yellow-dark" width="50"></div>
                                                        <div>
                                                            <h5 class="mt-1 mb-0">Johnatan Unixer</h5>
                                                            <p class="font-10 mt-n1 color-blue-dark">Petugas Medis</p>
                                                        </div>
                                                        <div class="ms-auto"><span class="slider-next badge bg-blue-dark mt-2 p-2 font-8">TAP FOR MORE</span></div>
                                                    </div>
                                                </div>
                                                <div class="splide__slide mx-3">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mt-1 mb-0">Johnatan Doe</h5>
                                                            <p class="font-10 mt-n1 color-blue-dark">Petugas Medis</p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="#" class="icon icon-xs rounded-circle shadow-l bg-phone"><i class="fa fa-phone"></i></a>
                                                            <a href="#" class="icon icon-xs rounded-circle shadow-l bg-facebook me-2 ms-2"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                    
                                    <div class="divider mt-3"></div>
                    
                                    <div data-splide='{"autoplay":false}' class="splide single-slider slider-no-arrows slider-no-dots" id="user-slider-4">
                                        <div class="splide__track">
                                            <div class="splide__list">
                                                <div class="splide__slide mx-3">
                                                    <div class="d-flex">
                                                        <div><img src="{{ asset('frontend') }}/images/avatars/7s.png" class="me-3 rounded-circle shadow-l bg-fade-red-dark" width="50"></div>
                                                        <div>
                                                            <h5 class="mt-1 mb-0">Vincent Mobi</h5>
                                                            <p class="font-10 mt-n1 color-gray-dark">Driver</p>
                                                        </div>
                                                        <div class="ms-auto"><span class="slider-next badge bg-blue-dark mt-2 p-2 font-8">TAP FOR MORE</span></div>
                                                    </div>
                                                </div>
                                                <div class="splide__slide mx-3">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mt-1 mb-0">Vincent Mobi</h5>
                                                            <p class="font-10 mt-n1 color-gray-dark">Driver</p>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <a href="#" class="icon icon-xs rounded-circle shadow-l bg-phone"><i class="fa fa-phone"></i></a>
                                                            <a href="#" class="icon icon-xs rounded-circle shadow-l bg-facebook me-2 ms-2"><i class="fab fa-whatsapp"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                    
                                    
                                </div>
                            </div>
                        </div>
                        <a data-bs-toggle="collapse" href="#collapse-8" class="btn btn-m btn-full rounded-sm bg-highlight font-700 shadow-xl text-uppercase">Contact Us</a>
                    </div>    
                </div>

        </div>



		<div class="divider divider-margins mt-4"></div>

		<div class="card card-style">
            <div class="content text-center font-800">
                <h4>Selamat Datang di PEDA KTNA Provinsi Kalimantan Timur XI Tahun 2025</h4>
            </div>
        </div>

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
                        <a href="#" class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Read More</a>
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
                        <a href="#" class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Read More</a>
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
                        <a href="#" class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-6 ps-0">
                <div class="card card-style ms-2">
                    <a data-card-height="150" class="card preload-img mb-3" data-src="{{ asset('frontend') }}/images/pictures/24.jpg"  href="#">
                        <div class="card-bottom ms-3 mb-2">
                            <h4 class="color-white font-600 ">Lain-lain</h4>
                        </div>
                        <div class="card-overlay bg-gradient rounded-0"></div>
                    </a>
                    <div class="content mt-0">
                        <p>
                            A small description about your project goes here. Then, you can access the portfolio project to see it in detail.
                        </p>
                        <a href="#" class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Read More</a>
                    </div>
                </div>
            </div>
        </div>
          
        <div class="content mb-2 pt-3">
			<h5 class="float-start font-16 font-600">🔥 Berita Terkini</h5>
			<a class="float-end font-12 color-highlight mt-n1" href="#">View All</a>
			<div class="clearfix"></div>
		</div>

		<div class="card card-style mb-3 d-flex">
			<div class="d-flex py-3 ps-3 pe-4">
				<div class="align-self-center">
					<img src="images/pictures/14t.jpg" width="70" class="rounded-m">
				</div>
				<div class="ps-2 ms-1 align-self-center w-100">
					<h5 class="font-600 mb-0">Typography</h5>
					<p class="mt-n1 font-11 mb-0">
						Get Certified in The art of fonts.
					</p>
					<div class="row mb-0">
						<div class="col-6">
							<span class="font-10 color-highlight">By Johnatan Doe</span>
						</div>
						<div class="col-6 text-end">
							<span class="font-10 opacity-50">12 Courses</span>
						</div>
					</div>
				</div>
			</div>
			<div class="divider divider-margins mb-0"></div>
			<div class="d-flex py-3 ps-3 pe-4">
				<div class="align-self-center">
					<img src="images/pictures/17t.jpg" width="70" class="rounded-m">
				</div>
				<div class="ps-2 ms-1 align-self-center w-100">
					<h5 class="font-600 mb-0">Vanilla JavaScript</h5>
					<p class="mt-n1 font-11 mb-0">
						Data Structures and Algorithms.
					</p>
					<div class="row mb-0">
						<div class="col-6">
							<span class="font-10 color-highlight">By Alexander Joe</span>
						</div>
						<div class="col-6 text-end">
							<span class="font-10 opacity-50">12 Courses</span>
						</div>
					</div>
				</div>
			</div>
			<div class="divider divider-margins mb-0"></div>
			<div class="d-flex py-3 ps-3 pe-4">
				<div class="align-self-center">
					<img src="images/pictures/20t.jpg" width="70" class="rounded-m">
				</div>
				<div class="ps-2 ms-1 align-self-center w-100">
					<h5 class="font-600 mb-0">SEO & Ranking</h5>
					<p class="mt-n1 font-11 mb-0">
						Search Engine Optimization Certificate.
					</p>
					<div class="row mb-0">
						<div class="col-6">
							<span class="font-10 color-highlight">By Doeson Jackson</span>
						</div>
						<div class="col-6 text-end">
							<span class="font-10 opacity-50">12 Courses</span>
						</div>
					</div>
				</div>
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
                            <a href="#" class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Selengkapnya</a>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>



        <!-- footer and footer card-->
        {{-- <div class="footer" data-menu-load="menu-footer.html"></div>   --}}
    </div> 
@endsection