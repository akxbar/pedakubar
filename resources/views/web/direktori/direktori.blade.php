@extends('app.home')
@section('content')

<div class="page-content" style="min-height:60vh!important">
<div class="page-title page-title-small dropdown">
        <h2><a href="#" data-back-button></a>Direktori</h2>
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
    @include('web.logout')
    <!---------------->
    <!---------------->


    <div class="card card-style">
        <div class="content">
            <h4>Direktori Informasi</h4>
            <p>
                Direktori Informasi adalah kumpulan informasi fasilitas umum dan fasilitas kesehatan.
            </p>
        </div>
    </div>

@forelse ( $kategoris as $kategori )
<div class="card card-style mb-3">
        <div class="list-group list-custom-small list-icon-0 {{$kategori->color??'bg-blue-dark'}} ps-3 pe-4">
            <a data-bs-toggle="collapse" class="no-effect" href="#collapse-{{ $kategori->id }}">
                <i class="fa {{$kategori->icon}} color-white"></i>
                <span class="font-14 color-white">{{ $kategori->title }}</span>
                <i class="fa fa-angle-down color-white"></i>
            </a>
        </div>
        <div class="collapse ps-2 pe-4" id="collapse-{{ $kategori->id }}">
            <div class="list-group list-custom-small">

            @foreach ( $direktoris as $direktori )

            @if($kategori->id == $direktori->kategori_direktori_id)
            <a href="#" data-menu="menu-maps-{{ $direktori->id }}">
                    <i class="fa font-13 {{ $direktori->logo??'fa-suitcase'}} color-green-dark"></i>
                    <span>{{  $direktori->title }}</span>
                    <i class="fa fa-angle-right"></i>
                </a>
            @endif
            @endforeach

            </div>
        </div>
    </div>
@empty

@endforelse

</div>

{{-- modal --}}
@foreach ( $direktoris as $direktori )


<div id="menu-maps-{{ $direktori->id }}" class="menu menu-box-modal rounded-m"
data-menu-height="500"
data-menu-width="400">
<div class="card card-style mt-3">

    <div class="content mb-0">
        <div class="float-start">
            <div class="mt-0">
                <img src="{{ asset('storage') }}/{{ $direktori->image }}" class="img-fluid rounded-sm shadow-xl">
            </div>
            <h1 class="mb-n1 mt-2">{{ $direktori->title }}</h1>
            <p class="font-10 mb-1 pb-1"><i class="fa fa-map-marker-alt me-2"></i>{{ $direktori->alamat}}</p>
            <p class="font-10 mb-1 pb-1"><i class="fa fa-phone me-2"></i>{{ $direktori->no_telp}}</p>
            <a href="{{$direktori->gmap}}" class="float-end btn btn-s bg-highlight rounded-xl shadow-xl text-uppercase font-900 font-11 mb-3">View on Map</a>
        </div>

    </div>
</div>
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

                        {!! $direktori->body !!}

                </div>
            </div>
        </div>

        <div data-bs-parent="#tab-group-2" class="collapse" id="tab-7">
            <div class="card card-style">
                <div class="content mb-3">
                    <div class="row text-center row-cols-3 mb-0">
                    @php
                    $dataArray2 = $direktori->multi_image;
                     $counter1 = 1;
                     @endphp
                                    @foreach ($dataArray2 as $value)
                        <a class="col" data-gallery="gallery-1" href="{{ asset('storage') }}/{{ $value['image'] }}" title="Vynil and Typerwritter">
                            <img src="{{ asset('storage') }}/{{ $value['image'] }}" data-src="{{ asset('storage') }}/{{ $value['image'] }}" class="preload-img img-fluid rounded-xs" alt="img">
                            <p class="font-600 pb-1">{{ $value['title'] }}</p>
                        </a>
                        @php $counter1++; @endphp
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<a href="#" class="close-menu btn btn-center-m btn-sm shadow-l rounded-s text-uppercase font-900 bg-red-dark mt-1 mb-2">Tutup</a>
</div>
@endforeach
{{-- end modal --}}
@endsection
