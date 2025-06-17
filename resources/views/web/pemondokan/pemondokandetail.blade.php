@extends('app.home')
@section('content')

<div class="page-content">

    <div class="page-title page-title-small dropdown ">
        <h2><a href="{{ route('pemondokan') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
        @include('web.logout')
          </ul>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
        <div class="card card-style mt-3">
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

    <a class="col" data-gallery="gallery-{{ $pemondokan->id }}" data-draggable="false"
        href="{{ asset('storage/' . $value['fasilitas']) }}"
        title="{{ $value['name'] }}">



        <img src="{{ asset('storage/' . $value['fasilitas']) }}"
             data-src="{{ asset('storage/' . $value['fasilitas']) }}"
             class="preload-img img-fluid rounded-xs" alt="img">
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

            <a href="{{$pemondokan->link_gmap}}" class="btn btn-m rounded-sm bg-blue-dark font-700 text-uppercase btn-full mb-4">View on Map</a>

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

<a href="/pemondokan" class="btn btn-m rounded-sm bg-orange-dark font-700 text-uppercase btn-full mb-4">kembali</a>
        </div>

    </div>

</div>

@endsection
