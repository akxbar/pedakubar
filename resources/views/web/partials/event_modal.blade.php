@php
    \Carbon\Carbon::setLocale('id');
    $date = \Carbon\Carbon::parse($event->tanggal);
@endphp

<div class="d-flex mb-3">
    <div class="me-auto">
        <img src="{{ asset('storage/' . $event->image) }}" class="rounded-m shadow-xl" width="110">
    </div>
    <div class="ms-auto w-100 ps-3">
        <h3 class="font-18 font-700 pt-2 mt-4">{{ $event->title }}</h3>
    </div>
</div>

<div class="divider mt-1 mb-1"></div>

<div>
    <h4>About Event</h4>
    <p>{!! $event->body !!}</p>
</div>

<div class="list-group list-custom-large mb-0">
    <a href="#">
        <i class="far fa-calendar color-blue-dark"></i>
        <span>{{ $date->translatedFormat('l, j F Y') }}</span>
        <strong>{{ substr($event->begin, 0, 5) }} WITA - {{ substr($event->end, 0, 5) }} WITA</strong>
    </a>
    <a href="{{ $event->link_gmap }}" target="_blank">
        <i class="fa fa-map-marker-alt color-red-dark"></i>
        <span>{{ $event->tempat }}</span>
        <strong>{{ substr($event->alamat, 0, 60) }}</strong>
        <span class="badge bg-blue-dark font-10 rounded-xs mb-0">SEE ON MAP</span>
        <i class="fa fa-angle-right"></i>
    </a>
    <a href="#">
        <i class="far fa-calendar color-blue-dark mb-2"></i>
        <span>Narasumber</span>
        <strong>{{ $event->narsum }}</strong>
    </a>
</div>

<a href="{{ route('evendetail', $event->id) }}"
    class="btn btn-full text-uppercase font-900 bg-highlight rounded-sm shadow-xl btn-m mt-3 mb-3 mx-2">
    Selengkapnya
</a>