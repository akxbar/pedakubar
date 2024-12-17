@extends('app.home')
@section('content')

<div class="page-content">
		
    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button></a>Pemondokan</h2>
        <a href="#" data-menu="menu-main" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h2>Lokasi Pemondokan</h2>
            <p class="mb-3">
                Lorem ipsum dolor sit amet, consectetur adipis icing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <a href="#" data-menu="menu-appointment">
                <div class="card card-style bg-blue-light mb-3 mx-0">
                    <div class="d-flex">
                        <div class="ps-2 ms-2 align-self-center">
                            <h4 class="pt-4 color-white">Pemondokan Kab. PPU</h4>
                            <p class="font-12 color-white mt-n2 mb-4 opacity-70">Schedule it on the right day for you.</p>
                        </div>
                        <div class="ms-auto me-3 align-self-center">
                            <i class="fa fa-calendar-alt color-white fa-2x mt-4 mb-4"></i>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" data-menu="menu-appointment">
                <div class="card card-style bg-blue-light mb-3 mx-0">
                    <div class="d-flex">
                        <div class="ps-2 ms-2 align-self-center">
                            <h4 class="pt-4 color-white">Pemondokan Kab. Mahulu</h4>
                            <p class="font-12 color-white mt-n2 mb-4 opacity-70">Schedule it on the right day for you.</p>
                        </div>
                        <div class="ms-auto me-3 align-self-center">
                            <i class="fa fa-calendar-alt color-white fa-2x mt-4 mb-4"></i>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" data-menu="menu-appointment">
                <div class="card card-style bg-blue-light mb-3 mx-0">
                    <div class="d-flex">
                        <div class="ps-2 ms-2 align-self-center">
                            <h4 class="pt-4 color-white">Pemondokan Kab. Berau</h4>
                            <p class="font-12 color-white mt-n2 mb-4 opacity-70">Schedule it on the right day for you.</p>
                        </div>
                        <div class="ms-auto me-3 align-self-center">
                            <i class="fa fa-calendar-alt color-white fa-2x mt-4 mb-4"></i>
                        </div>
                    </div>
                </div>
            </a>

            <a href="#" data-menu="menu-appointment">
                <div class="card card-style bg-blue-light mb-3 mx-0">
                    <div class="d-flex">
                        <div class="ps-2 ms-2 align-self-center">
                            <h4 class="pt-4 color-white">Pemondokan Kota Samarinda</h4>
                            <p class="font-12 color-white mt-n2 mb-4 opacity-70">Schedule it on the right day for you.</p>
                        </div>
                        <div class="ms-auto me-3 align-self-center">
                            <i class="fa fa-calendar-alt color-white fa-2x mt-4 mb-4"></i>
                        </div>
                    </div>
                </div>
            </a>

        </div>
    </div>

   

</div>
<!-- End of Page Content-->



<div id="menu-appointment" class="menu menu-box-left" data-menu-width="cover" data-menu-height="cover">
    <a href="#" class="close-menu py-3 text-center font-12 btn-full rounded-0 text-uppercase font-800 bg-black color-white"><i class="fa fa-arrow-left pe-3"></i>Kembali Ke Pemondokan</a>
    {{-- <img src="{{ asset('frontend') }}/images/medical/6t.jpg" class="img-fluid" alt="doctor"> --}}
    <div class="card card-style">
        <div class="content mb-3">
            <h3 class="mb-0">Fasiltas Pemondokan</h3>
            <p>
                Simple thumbnails with caption attached to them. These will all open a gallery when tapped.
            </p>            
            <div class="row text-center row-cols-3 mb-0">
                <a class="col" data-gallery="gallery-1"  title="Vynil and Typerwritter">
                    <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/27s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                    <p class="font-600 pb-1">Parkiran</p>
                </a>
                <a class="col" data-gallery="gallery-1" title="Cream Cookie">
                    <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/22s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                    <p class="font-600 pb-1">Kamar Tidur</p>
                </a>
                <a class="col" data-gallery="gallery-1" title="Cookies and Flowers">
                    <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/23s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                    <p class="font-600 pb-1">Dapur</p>
                </a>
                <a class="col" data-gallery="gallery-1" title="Pots and Pans">
                    <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/24s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                    <p class="font-600 pb-1">Kamar Mandi</p>
                </a>
                <a class="col" data-gallery="gallery-1" title="Berries are Packed with Fiber">
                    <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/25s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                    <p class="font-600 pb-1">Ruang Tamu</p>
                </a>
                <a class="col" data-gallery="gallery-1" title="A beautiful Retro Camera">
                    <img src="images/empty.png" data-src="{{ asset('frontend') }}/images/pictures/26s.jpg" class="preload-img img-fluid rounded-xs" alt="img">
                    <p class="font-600 pb-1">Laundry</p>
                </a>
            </div>
        </div>
    </div>   
    <div class="content">
        <h1>Lokasi Pemondokan</h1>
        <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4885.6774132665605!2d115.69027702194127!3d-0.23682780309848775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df7f5c9e8dbdb4f%3A0x3c9638ecbaefef26!2sDINAS%20PERTANIAN%20KAB.KUTAI%20BARAT!5e1!3m2!1sen!2sid!4v1729537266556!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>

        <a href="https://maps.app.goo.gl/GA9Y7dc4YPAb2iuMA" class="btn btn-m rounded-sm bg-blue-dark font-700 text-uppercase btn-full mb-4">View on Map</a>

        <div class="divider"></div>
        <h1>Hubungi Penanggung Jawab</h1>
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

        <div class="divider mt-4"></div>

    </div>
    <a href="#" class="close-menu btn btn-full btn-m text-uppercase font-700 bg-red-dark mx-3 rounded-sm mb-5 mt-5">Kembali Ke Pemondokan</a>
</div>



@endsection