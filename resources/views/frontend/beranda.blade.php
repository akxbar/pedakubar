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
            <div class="row">
                <div class="col-12">
                    <a href="#" class="btn btn-full btn-m rounded-s text-uppercase font-900 shadow-xl bg-highlight">Contact Us</a>
                </div>
                {{-- <div class="col-6">
                    <a href="#" class="btn btn-full btn-border btn-m rounded-s text-uppercase font-900 shadow-l border-highlight color-highlight">Contact US</a>
                </div> --}}
            </div>
        </div>

		<div class="card card-style">
            <div class="content">
                <h4>Galery Foto dan Video</h4>

            </div>
        </div>

        <div class="splide double-slider visible-slider slider-no-arrows slider-no-dots" id="double-slider-2">
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide">
                        <div data-card-height="185" class="card bg-18 mx-3 rounded-m shadow-l">
                            <div class="card-bottom text-center mb-4">
                                <h2 class="color-white text-uppercase font-700">Apptastic</h2>
                            </div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                        <a href="#" class="under-slider-btn btn btn-s btn-center-xs text-uppercase font-700 bg-red-dark rounded-s">Detail</a>
                    </div>
                    <div class="splide__slide">
                        <div data-card-height="185" class="card bg-28 mx-3 rounded-m shadow-l">
                            <div class="card-bottom text-center mb-4">
                                <h2 class="color-white text-uppercase font-700">AMP Drawer</h2>
                            </div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                        <a href="#" class="under-slider-btn btn btn-s btn-center-xs text-uppercase font-700 bg-red-dark rounded-s">Detail</a>
                    </div>
                    <div class="splide__slide">
                        <div data-card-height="185" class="card bg-13 mx-3 rounded-m shadow-l">
                            <div class="card-bottom text-center mb-4">
                                <h2 class="color-white text-uppercase font-700">Appeca</h2>
                            </div>
                            <div class="card-overlay bg-gradient"></div>
                        </div>
                        <a href="#" class="under-slider-btn btn btn-s btn-center-xs text-uppercase font-700 bg-red-dark rounded-s">Detail</a>
                    </div>
                </div>
            </div>
        </div>

		<div class="divider divider-margins mt-4"></div>

		<div class="card card-style">
            <div class="content">
                <h4>Selamat Datang di PEDA Kutai Barat Tahun 2025</h4>
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
        
        <!-- footer and footer card-->
        {{-- <div class="footer" data-menu-load="menu-footer.html"></div>   --}}
    </div> 
@endsection