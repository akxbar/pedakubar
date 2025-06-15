@extends('app.home')
@section('content')

<div class="page-content">

    <div class="page-title page-title-small dropdown">
        <h2><a href="#" data-back-button></a>Event</h2>
        @include('web.logout')
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
        <div class="content mb-0">
            <h4>Penyelenggaraan PEDA KTNA Provinsi Kalimantan Timur XI Tahun 2025 </h4>
            <p>
              Event PEDA KTNA Provinsi Kalimantan Timur XI Tahun 2025
          </p>

            <div class="accordion mt-4" id="accordion-1">

            @foreach ($kategoris as $kat )

                <div class="card card-style shadow-0 {{$kat->color??'bg-orange-light' }} mb-1">
                    <button class="btn accordion-btn  color-white no-effect" data-bs-toggle="collapse" data-bs-target="#collapse{{$kat->id}}">
                        {{ $kat->title }}
                        <i class="fa fa-chevron-down font-10 accordion-icon"></i>
                    </button>

                    <div id="collapse{{$kat->id}}" class="collapse bg-theme" data-bs-parent="#accordion-{{$kat->id}}">
                        <div class="pt-3 pb-3">
                            <div class="list-group list-custom-small">
                       @foreach ($events as $event)
                                @if($kat->id == $event->kategori_id)
                                <a href="#"  data-menu="cart-item-list-{{$event->id}}" class="open-menu">
                                    <i class="fa font-13 fa-calendar color-orange-dark"></i>
                                    <span>{{ $event->title }}</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </div>

    <!-- footer and footer card-->
    <div class="footer" data-menu-load="menu-footer.html"></div>
</div>
<!-- end of page content-->

@foreach ( $events as $event )


<div id="cart-item-list-{{$event->id}}"
     class="menu menu-box-bottom menu-box-detached rounded-m"
     data-menu-height="550"
     data-menu-effect="menu-over">

     <div class="content">
        <div class="d-flex mb-3">
            <div class="me-auto">
                <img src="{{ asset('storage/'.$event->image) ?? asset('frontend'.'/images/food/1s.jpg') }}" class="rounded-m shadow-xl" width="110">
            </div>
            <div class="ms-auto w-100 ps-3">
                <h5 class="font-17 font-600 pb-0"></h5>
                {{-- <p class="mb-0 mt-n2 color-highlight font-11">Ready in 15 Minutes</p> --}}
                <div class="clearfix"></div>
                <div class="d-flex">
                    <div>
                        <h3 class="font-18 font-700 pt-2 mt-4 ">{{ $event->title }}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider mt-1 mb-1"></div>
        <div class="row mb-1">
            <div class="col-12">
                <div>
                    <h4>About Event</h4>
                    <p class="mb-2">
                        {!! $event->body !!}
                    </p>
               </div>
            </div>
            @php
             \Carbon\Carbon::setLocale('id');
               $date = \Carbon\Carbon::parse($event->tanggal);
            @endphp

            <div class="list-group list-custom-large mb-0">
                <a href="#">
                    <i class="far fa-calendar color-blue-dark"></i>
                    <span>{{ $date->translatedFormat('l, j F Y') }}</span>
                    <strong>{{ substr($event->begin, 0, 5) }} WITA - {{ substr($event->end, 0, 5) }} WITA </strong>
                </a>
                <a href="{{ $event->link_gmap }}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Hooray!">
                    <i class="fa fa-map-marker-alt color-red-dark"></i>
                    <span>{{ $event->tempat }}</span>
                    <strong>{{ substr( $event->alamat, 0,60) }}</strong>
                    <span class="badge bg-blue-dark font-10 rounded-xs mb-0">SEE ON MAP</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#">
                    <i class="far fa-calendar color-blue-dark mb-2"></i>
                    <span>Narasumber</span>
                    <strong>{{ $event->narsum }}</strong>
                </a>
                <div class="divider"></div>
            </div>



            <a href="{{ route('evendetail', $event->id) }}" class="btn text-uppercase font-900 bg-highlight rounded-sm mb-0 shadow-xl btn-m ">Selengkapnya</a>
        </div>
    </div>
</div>
@endforeach


@endsection
