@extends('app.home')
@section('content')

<div class="page-content">

    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button></a>Pemondokan</h2>
        <a href="#" data-menu="menu-warning-1" class="bg-fade-highlight-light shadow-xl preload-img"
            data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

    <!--Menu Warning-->
    <!---------------->
    <!---------------->
    @include('web.logout')
    <!---------------->
    <!---------------->


    <div class="card card-style">
        <div class="content">
            <h2>Lokasi Pemondokan</h2>
            <p class="mb-3">
                Lorem ipsum dolor sit amet, consectetur adipis icing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>



            @forelse  ($lokasis as $lokasi)
                <div class="card card-style mb-3">
                    <div class="list-group list-custom-small list-icon-0 bg-orange-light mb-3 mx-0">
                        <a data-bs-toggle="collapse" class="no-effect" href="#collapse-51">
                            <div class="d-flex">
                                <div class="ps-1 ms-1 align-self-center">
                                    <h4 class="pt-4 color-white">{{ $lokasi->title }}</h4>
                                    <p class="font-12 color-white mt-n2 mb-0 opacity-70">Schedule it on the right day for
                                        you.</p>
                                </div>
                                <div class="ms-auto me-3 align-self-center">
                                    <i class="fa fa-angle-down color-white"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="collapse ps-2 pe-4" id="collapse-51">

                        @foreach ($pemondokans as $pemondokan)
                            @if($pemondokan->tempat_pemondokan_id == $lokasi->id)
                                <a href="#" data-menu="menu-appointment-{{ $pemondokan->id }}">
                                    <div class="card card-style bg-mint-light mb-2 mx-0">
                                        <div class="d-flex">
                                            <div class="ps-2 ms-2 mb-3 align-self-center">
                                                <h6 class="pt-4 color-white">{{ $pemondokan->title }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
</div>
<!-- End of Page Content-->


@foreach ($pemondokans as $pemondokan)
    <div id="menu-appointment-{{ $pemondokan->id }}" class="menu menu-box-left" data-menu-width="cover"
        data-menu-height="cover">
        <a href="#"
            class="close-menu py-3 text-center font-12 btn-full rounded-0 text-uppercase font-800 bg-black color-white"><i
                class="fa fa-arrow-left pe-3"></i>Kembali Ke Pemondokan</a>
        {{-- <img src="{{ asset('frontend') }}/images/medical/6t.jpg" class="img-fluid" alt="doctor"> --}}
        <div class="card card-style">
            <div class="content mb-3">
                <h3 class="mb-0">Informasi Pemondokan </h3>
                <p>
                    Simple thumbnails with caption attached to them. These will all open a gallery when tapped.
                </p>
                <div class="d-flex mb-3">
                    <div>
                        <a href="#" class="icon icon-m bg-mint-dark rounded-m shadow-xl"><i
                                class="fa fa-home font-20"></i></a>
                    </div>
                    <div class="align-self-center ps-3">
                        <h4 class="font-600 font-14 mb-n2">Nama Kampung</h4>
                    </div>
                    <div class="align-self-center ms-auto">
                        <h5 class="color-mint-dark mb-n1 text-end">Sumber Bangun</h5>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div>
                        <a href="#" class="icon icon-m bg-mint-dark rounded-m shadow-xl"><i
                                class="fa fa-home font-16"></i></a>
                    </div>
                    <div class="align-self-center ps-3">
                        <h4 class="font-600 font-14 mb-n2">RT</h4>
                    </div>
                    <div class="align-self-center ms-auto">
                        <h5 class="color-mint-dark mb-n1 text-end">001</h5>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div>
                        <a href="#" class="icon icon-m bg-mint-dark rounded-m shadow-xl"><i
                                class="fa fa-home font-18"></i></a>
                    </div>
                    <div class="align-self-center ps-3">
                        <h4 class="font-600 font-14 mb-n2">Kecamatan</h4>
                    </div>
                    <div class="align-self-center ms-auto">
                        <h5 class="color-mint-dark mb-n1 text-end">Sekolaq Darat</h5>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div>
                        <a href="#" class="icon icon-m bg-orange-dark rounded-m shadow-xl"><i
                                class="fa fa-exchange-alt font-20"></i></a>
                    </div>
                    <div class="align-self-center ps-3">
                        <h4 class="font-600 font-14 mb-n2">Daya Tampung</h4>
                    </div>
                    <div class="align-self-center ms-auto">
                        <h5 class="color-orange-dark mb-n1 text-end">10 Orang</h5>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div>
                        <a href="#" class="icon icon-m bg-blue-dark rounded-m shadow-xl"><i
                                class="fa-solid fa-circle-check font-20"></i></a>
                    </div>
                    <div class="align-self-center ps-3">
                        <h4 class="font-600 font-14 mb-n2">Jumlah Kamar Tidur</h4>
                    </div>
                    <div class="align-self-center ms-auto">
                        <h5 class="color-blue-dark mb-n1 text-end">4 Kamar Tidur</h5>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div>
                        <a href="#" class="icon icon-m bg-blue-dark rounded-m shadow-xl"><i
                                class="fa-solid fa-circle-check font-20"></i></a>
                    </div>
                    <div class="align-self-center ps-3">
                        <h4 class="font-600 font-14 mb-n2">Fasilitas MCK</h4>
                    </div>
                    <div class="align-self-center ms-auto">
                        <h5 class="color-blue-dark mb-n1 text-end">2 Buah</h5>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div>
                        <a href="#" class="icon icon-m bg-blue-dark rounded-m shadow-xl"><i
                                class="fa-solid fa-circle-check font-20"></i></a>
                    </div>
                    <div class="align-self-center ps-3">
                        <h4 class="font-600 font-14 mb-n2">Kendaraan Roda 4</h4>
                    </div>
                    <div class="align-self-center ms-auto">
                        <h5 class="color-blue-dark mb-n1 text-end">2 Unit Mobil</h5>
                    </div>
                </div>

                <div class="d-flex mb-3">
                    <div>
                        <a href="#" class="icon icon-m bg-blue-dark rounded-m shadow-xl"><i
                                class="fa-solid fa-circle-check font-20"></i></a>
                    </div>
                    <div class="align-self-center ps-3">
                        <h4 class="font-600 font-14 mb-n2">Kendaraan Roda 2</h4>
                    </div>
                    <div class="align-self-center ms-auto">
                        <h5 class="color-blue-dark mb-n1 text-end">3 Unit Sepeda Motor</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content mb-3">
                <h3 class="mb-0">Fasiltas Pemondokan</h3>
                <p>
                    Simple thumbnails with caption attached to them. These will all open a gallery when tapped.
                </p>
                <div class="row text-center row-cols-3 mb-0">
                    <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/27s.jpg"
                        title="Parkiran">
                        <img src="{{ asset('frontend') }}/images/empty.png"
                            data-src="{{ asset('frontend') }}/images/pictures/27s.jpg"
                            class="preload-img img-fluid rounded-xs" alt="img">
                        <p class="font-600 pb-1">Parkiran</p>
                    </a>
                    <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/22s.jpg"
                        title="Kamar Tidur">
                        <img src="{{ asset('frontend') }}/images/empty.png"
                            data-src="{{ asset('frontend') }}/images/pictures/22s.jpg"
                            class="preload-img img-fluid rounded-xs" alt="img">
                        <p class="font-600 pb-1">Kamar Tidur</p>
                    </a>
                    <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/23s.jpg"
                        title="Kamar Mandi">
                        <img src="{{ asset('frontend') }}/images/empty.png"
                            data-src="{{ asset('frontend') }}/images/pictures/23s.jpg"
                            class="preload-img img-fluid rounded-xs" alt="img">
                        <p class="font-600 pb-1">Dapur</p>
                    </a>
                    <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/24s.jpg"
                        title="Kamar Mandi">
                        <img src="{{ asset('frontend') }}/images/empty.png"
                            data-src="{{ asset('frontend') }}/images/pictures/24s.jpg"
                            class="preload-img img-fluid rounded-xs" alt="img">
                        <p class="font-600 pb-1">Kamar Mandi</p>
                    </a>
                    <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/25s.jpg"
                        title="Ruang Tamu">
                        <img src="{{ asset('frontend') }}/images/empty.png"
                            data-src="{{ asset('frontend') }}/images/pictures/25s.jpg"
                            class="preload-img img-fluid rounded-xs" alt="img">
                        <p class="font-600 pb-1">Ruang Tamu</p>
                    </a>
                    <a class="col" data-gallery="gallery-1" href="{{ asset('frontend') }}/images/pictures/26s.jpg"
                        title="Laundry">
                        <img src="{{ asset('frontend') }}/images/empty.png"
                            data-src="{{ asset('frontend') }}/images/pictures/26s.jpg"
                            class="preload-img img-fluid rounded-xs" alt="img">
                        <p class="font-600 pb-1">Laundry</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="content">
            <h1>Lokasi Pemondokan</h1>
            <p>
                Simple thumbnails with caption attached to them. These will all open a gallery when tapped.
            </p>
            <p>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4885.6774132665605!2d115.69027702194127!3d-0.23682780309848775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df7f5c9e8dbdb4f%3A0x3c9638ecbaefef26!2sDINAS%20PERTANIAN%20KAB.KUTAI%20BARAT!5e1!3m2!1sen!2sid!4v1729537266556!5m2!1sen!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>

            <a href="https://maps.app.goo.gl/GA9Y7dc4YPAb2iuMA"
                class="btn btn-m rounded-sm bg-blue-dark font-700 text-uppercase btn-full mb-4">View on Map</a>

            <div class="divider"></div>
            <h1>Hubungi Penanggung Jawab</h1>
            <div class="card card-style">
                <div class="content">

                    @foreach ($penangungjawabs as $penangungjawab)

                            @if($penangungjawab->pemondokan_id == $pemondokan->id)

                                    @php
                                        $dataArray = $penangungjawab->image;
                                    @endphp




                             @php $counter = 1; @endphp
                                    @foreach ($dataArray as $data)
                                        <div data-splide='{"autoplay":false}' class="splide single-slider slider-no-arrows slider-no-dots"
                                            id="user-slider-{{ $counter }}">
                                            <div class="splide__track">
                                                <div class="splide__list">
                                                    <div class="splide__slide mx-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                @if ($data['panitia'])
                                                                    <img src="{{ asset('storage') }}/{{ $data['panitia'] }}"
                                                                        class="me-3 rounded-circle bg-fade-red-light shadow-l" width="50">
                                                                @else

                                                                    <img src="{{ asset('frontend') }}/images/avatars/1s.png"
                                                                        class="me-3 rounded-circle bg-fade-red-light shadow-l" width="50">
                                                                @endif



                                                            </div>
                                                            <div>
                                                                <h5 class="mt-1 mb-0">{{$data['name']}}</h5>
                                                                <p class="font-10 mt-n1 color-red-dark">{{$data['jabatan']}}</p>
                                                            </div>
                                                            <div class="ms-auto"><span class="slider-next badge bg-red-dark mt-2 p-2 font-8">TAP
                                                                    FOR MORE</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="splide__slide mx-3">
                                                        <div class="d-flex">
                                                            <div>
                                                                <h5 class="mt-1 mb-0">{{$data['name']}}</h5>
                                                                <p class="font-10 mt-n1 color-red-dark">{{$data['jabatan']}}</p>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="tel:{{$data['no_hp']}}"
                                                                    class="icon icon-xs rounded-circle shadow-l bg-phone"><i
                                                                        class="fa fa-phone"></i></a>
                                                                <a href="https://wa.me/{{$data['no_hp']}}"
                                                                    class="icon icon-xs rounded-circle shadow-l bg-facebook me-2 ms-2"><i
                                                                        class="fab fa-whatsapp"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="divider mt-3"></div>
                                        @php $counter++; @endphp
                                    @endforeach
                            @endif
                    @endforeach






                </div>
            </div>

            <div class="divider mt-2"></div>

        </div>
        <a href="#"
            class="close-menu btn btn-full btn-m text-uppercase font-700 bg-red-dark mx-3 rounded-sm mb-3 mt-3">Kembali Ke
            Pemondokan</a>
    </div>

@endforeach

@endsection
