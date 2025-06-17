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
                                           $ada =  route('pemondokandetail', ['id' => $pemondokan->id]);
                                           @endphp
                                        @else
                                          @php
                                           $ada =  '#';
                                           @endphp
                                          @endif



                                <a href="{{$ada }}" >
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

 <!-- End of Page Content-->

@endsection
