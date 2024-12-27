@extends('app.home')
@section('content')



<div class="page-content">

<div class="page-title page-title-small dropdown">
        <h2><a href="#" data-back-button></a>Pemondokan</h2>
        @include('web.logout')
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

    <!--Menu Warning-->
    <!---------------->
    <!---------------->

    <!---------------->
    <!---------------->


    <div class="card card-style">
        <div class="content">
            <h2>Lokasi Pemondokan</h2>
            <p class="mb-3">
            Lokasi Pemondokan PEDA KTNA XI Provinsi Kalimantan Timur Tahun 2025 .
            </p>



            @forelse  ($lokasis as $lokasi)
                <div class="card card-style mb-3">
                    <div class="list-group list-custom-small list-icon-0 bg-orange-light mb-3 mx-0">
                        <a data-bs-toggle="collapse" class="no-effect" href="#collapse-{{$lokasi->id}}">
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
                    <div class="collapse ps-2 pe-4" id="collapse-{{$lokasi->id}}">


                         @php
                        $aksesExists = getUserId(session('user_id'))??false;
                        @endphp

                        @foreach ($pemondokans as $pemondokan)
                            @if($pemondokan->tempat_pemondokan_id == $lokasi->id)

                                        @if ($aksesExists)
                                          @php
                                           $ada =  $pemondokan->id ;
                                           @endphp
                                          @endif

                                <a href="#" data-menu="menu-appointment-{{ $ada??null}}">
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
                   {{ $pemondokan->alamat }}
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
                        <h5 class="color-mint-dark mb-n1 text-end">{{$pemondokan->nama_kampung}}</h5>
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
                        <h5 class="color-mint-dark mb-n1 text-end">{{$pemondokan->rt}}</h5>
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
                        <h5 class="color-mint-dark mb-n1 text-end">{{$pemondokan->kecamatan}}</h5>
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
                        <h5 class="color-orange-dark mb-n1 text-end">{{ $pemondokan->daya_tampung }} Orang</h5>
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
                        <h5 class="color-blue-dark mb-n1 text-end">{{ $pemondokan->jumlah_kamar_tidur }} Kamar Tidur</h5>
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
                        <h5 class="color-blue-dark mb-n1 text-end">{{ $pemondokan->fasilitas_mck }} Buah</h5>
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
                        <h5 class="color-blue-dark mb-n1 text-end">{{ $pemondokan->kendaraan_roda4 }} Unit Mobil</h5>
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
                        <h5 class="color-blue-dark mb-n1 text-end">{{ $pemondokan->kendaraan_roda2 }} Unit Sepeda Motor</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-style">
            <div class="content mb-3">
                <h3 class="mb-0">Fasiltas Pemondokan</h3>
                <p>
                   Tampilan Gambar Fasilitas Pemondokan {{ $pemondokan->title }}
                </p>
                <div class="row text-center row-cols-3 mb-0">
                @php

    $dataArray2 = $pemondokan->image;

@endphp

@foreach ($dataArray2 as $index => $value)

    <a class="col" data-gallery="gallery-{{ rand(1, 1000) }}" data-draggable="false"
        href="{{ asset('storage/' . $value['fasilitas']) }}"
        title="{{ $value['name'] }}">



        <img src="{{ asset('storage/' . $value['fasilitas']) }}"
             data-src="{{ asset('storage/' . $value['fasilitas']) }}"
             class="preload-img img-fluid rounded-xs" loading="lazy" alt="img">
        <p class="font-600 pb-1">{{ $value['name'] }}</p>


    </a>
@endforeach
                </div>
            </div>
        </div>

        <div class="content">
            <h1>Lokasi Pemondokan</h1>
            <p>
              {!! $pemondokan->body !!}
            </p>
            <p>
               {!! $pemondokan->embed_gmap !!}
            </p>

            <a href="{{$pemondokan->link_gmap}}"
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

                                    <div class="splide__slide mx-3">
    <div class="d-flex align-items-center justify-content-between">
        <!-- Bagian Kiri -->
        <div class="d-flex align-items-center">
            <!-- Gambar -->
             @if($data['panitia'])
            <img src="{{ asset('storage/' . $data['panitia']) }}"
                class="me-3 rounded-circle shadow-sm"
                width="50"
                alt="Avatar">
            @else
            <img src="{{ asset('frontend') }}/images/avatars/2s.png"
                class="me-3 rounded-circle shadow-sm"
                width="50"
                alt="Avatar">
                @endif
            <!-- Teks -->
            <div>
                <h5 class="mt-1 mb-0">{{$data['name']}}</h5>
                <p class="text-muted mb-0" style="font-size: 0.875rem;">{{$data['jabatan']}}</p>
            </div>
        </div>
        <!-- Bagian Kanan -->
        <div>
            <!-- <a href="tel:{{$data['no_hp']}}"
                class="btn btn-sm btn-primary shadow-sm rounded-circle me-2">
                <i class="fa fa-phone"></i>
            </a> -->
            <a href="https://wa.me/{{$data['no_hp']}}"
                class="btn btn-sm btn-success shadow-sm rounded-circle">
                <i class="fab fa-whatsapp"></i>
            </a>
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
