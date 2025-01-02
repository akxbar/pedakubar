@extends('app.home')
@section('content')
<div class="page-content">

<div class="page-title page-title-small dropdown">
        <h2 data-username="Enabled ({{ session('user_name', 'Guest') }})!" class="greeting-text"></h2>
        @include('web.logout')
    </div>
    <div class="card header-card shape-rounded" data-card-height="210">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>


    <!--Menu Warning-->
    <!---------------->
    <!---------------->

    <!---------------->
    <!---------------->

    <!-- Homepage Slider-->
    <div class="splide single-slider slider-no-arrows slider-no-dots homepage-slider" id="single-slider-1">
        <div class="splide__track">
            <div class="splide__list">


           @foreach ($slides as $item)


                <div class="splide__slide">
                    <div class="card card-style"
                        style="background-image:url({{ asset('storage') }}/{{ $item->image }})"
                        data-card-height="320">
                        <div class="card-bottom">
                            <h1 class="font-24 font-700 text-center">{{$item->title}}</h1>
                            <p class="boxed-text-xl">
                                {{$item->body}}
                            </p>
                        </div>
                        <div class="card-overlay bg-gradient-fade"></div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>

    <div class="content mt-0">
        <div class="card card-style bg-fade-green-dark ">
            <div class="content text-center font-800">
                <h3>Selamat Datang di PEDA KTNA Provinsi Kalimantan Timur XI Tahun 2025</h3>
                <p>
                    MELALUI PEKAN DAERAH XI PETANI NELAYAN PROVINSI KALIMANTAN TIMUR TAHUN 2025 <br> KITA TINGKATKAN
                    DAYA SAING DAN PRODUK UNGGULAN PETANI NELAYAN MENDUKUNG KALIMANTAN TIMUR
                    SEBAGAI PENYANGGA IBUKOTA NUSANTARA
                </p>
            </div>
        </div>

        <div class="card card-style">
            <div class="content">
                <h4 class="bolder text-center font-800 ">Sekretariat PEDA KTNA Provinsi Kalimantan Timur XI Tahun 2025
                </h4>
                <p class="text-center font-700 pb-1">{{ $kontak->alamat??'' }}
                </p>
                <div class="collapse" id="collapse-8">
                    <div class="card card-style">
                        <div class="content">

                            <div class="list-group list-custom-small">
                            <a href="tel:+1234567890">Test Call</a>

                            <a href="{{ isset($kontak->no_telp) ? 'tel:' . $kontak->no_telp : '#' }}">
                                    <i class="fa font-18 fa-phone color-phone"></i>
                                    <span>{{ $kontak->no_telp ?? 'Phone number not available' }}</span>
                                    <span class="badge bg-highlight rounded-xs color-white fa font-10">TAP TO CALL</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <a href="https://wa.me/{{$kontak->no_wa??''}}">
                                    <i class="fa font-18 fab fa-whatsapp color-whatsapp"></i>
                                    <span>{{$kontak->no_wa??''}}</span>
                                    <span class="badge bg-highlight rounded-xs color-white fa font-10">TAP TO
                                        WHATSAPP</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                <a href="{{ isset($kontak->email) ? 'mailto:' . $kontak->email : '#' }}">
                                    <i class="fa font-18 fa-envelope color-mail"></i>
                                    <span>{{ $kontak->email ?? 'Email not available' }}</span>
                                    <span class="badge bg-highlight rounded-xs color-white fa font-10">TAP TO MAIL</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a data-bs-toggle="collapse" href="#collapse-8"
                    class="btn btn-m btn-full rounded-sm bg-highlight font-700 shadow-xl text-uppercase">Contact Us</a>
            </div>
        </div>

    </div>

    <div class="divider divider-margins mt-4"></div>

    <div class="row mb-0">

@foreach ($halaman as $item )


        <div class="col-6 pe-0">
            <div class="card card-style me-2">
                <a data-card-height="150" class="card preload-img mb-3"
                    data-src="{{ asset('storage') }}/{{ $item->image }}" href="{{ route('page',[$item->id]) }}">
                    <div class="card-bottom ms-3 mb-2">
                        <h4 class="color-white font-600">{{$item->title}}</h4>
                    </div>
                    <div class="card-overlay bg-gradient rounded-0"></div>
                </a>
                <div class="content mt-0">
                @php
                    $isi_berita = strip_tags( $item->body) ?? null;
                    $isi = substr($isi_berita, 0, 150);
                    $isi = substr($isi_berita, 0, strrpos($isi, " "));
                  @endphp
                    <p>
                    {!! $isi !!}..
                    </p>
                    <a href="{{ route('page',[$item->id]) }}"
                        class="btn btn-m btn-full bg-highlight font-900 text-uppercase rounded-s">Read More</a>
                </div>
            </div>
        </div>

        @endforeach






    </div>

    <div class="content mb-2 pt-3">
        <h5 class="float-start font-28 font-600 mb-3">🔥 Berita Terkini</h5>
        <a class="float-end font-18 color-highlight mt-n1 pe-4" href="{{ route('arsipberita') }}">View All</a>
        <div class="clearfix"></div>
    </div>

    <div class="card card-style">
        <div class="content mb-0">
@php
    use Carbon\Carbon;
@endphp
     @foreach ($berita as $item )
            <a href="{{ route('selengkapnya',[$item->id]) }}">
                <div class="d-flex mb-3">
                    <div class="align-self-center">
                        <h5 class="font-500 font-20 pb-1">{{$item->title}}</h5>
                         <!-- Carbon::parse($item->updated_at)->diffForHumans()  -->
                        <span class="badge text-uppercase font-16 px-2 py-1 bg-orange-dark">{{$item->tanggal->format('d M Y')}}</span>
                    </div>
                    <div class="align-self-center ms-auto">
                        <img src="{{ asset('storage') }}/{{ $item->image }}" class="rounded-m ms-3" width="90">
                    </div>
                </div>
            </a>
            <div class="divider mb-3"></div>
            @endforeach
        </div>
    </div>
@if ($video->image??null)
@php
    $video1 = 'storage/'.$video->image;
@endphp
@endif

@if ($foto->image??null)
 @php
   $foto1 = 'storage/'.$foto->image;
    @endphp
@endif
    <div class="card card-style">
        <div class="content text-center font-800">
            <h4>Galery Foto dan Video</h4>
        </div>
        <div class="row mb-0 p-4 ">
            <div class="col-6 pe-0">
                <div class="card card-style me-2" data-card-height="380"
                    style="background-image:url({{ $foto1??'/frontend/images/food/7.jpg'}})">
                    <div class="card-bottom bg-white m-2 p-3 rounded-s">
                        <span
                            class="badge bg-red-dark d-inline-block mb-2 text-uppercase font-11 mt-n2  rounded-s">Galery
                            Foto</span>
                        <h5 class="font-500 pt-2">
                            Galery Foto Kegiatan
                        </h5>
                        <div class="clearfix"></div>
                        <a href="{{ route('foto') }}"
                            class="btn btn-m btn-full bg-highlight font-700 text-uppercase rounded-s">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-6 pe-0">
                <div class="card card-style me-2" data-card-height="380"
                    style="background-image:url( {{ $video1??'/frontend/images/food/7.jpg' }})">
                    <div class="card-bottom bg-white m-2 p-3 rounded-s">
                        <span
                            class="badge bg-red-dark d-inline-block mb-2 text-uppercase font-11 mt-n2  rounded-s font-800">Galery
                            Video</span>
                        <h5 class="font-500 pt-2">
                            Galery Video Kegiatan
                        </h5>
                        <div class="clearfix"></div>
                        <a href="{{ $video->link??''}}" target="_blank"
                            class="btn btn-m btn-full bg-highlight font-700 text-uppercase rounded-s">Selengkapnya</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260"
        data-menu-load="menu-main.html" data-menu-active="nav-features" data-menu-effect="menu-over">
    </div>


    <!-- footer and footer card-->
    {{-- <div class="footer" data-menu-load="menu-footer.html"></div> --}}
</div>
@endsection
