@extends('app.home')
@section('content')

<div class="page-content">

    <div class="page-title page-title-small dropdown ">
        <h2><a href="{{ route('event') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
        <a href="#" data-menu="#" class="bg-fade-highlight-light shadow-xl preload-img dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
        @include('web.logout')
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
        <img data-src="{{ asset('storage/'.$event->image) ?? asset('frontend'.'/images/pictures/pedashow.png')  }}" class="preload-img img-fluid bottom-20">
        <div class="content mb-0">
            <h4>About Event</h4>
            <p class="mb-2">
            {!! $event->body !!}
            </p>
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
                <a href="{{ $event->link_gmap }}" target="_blank">
                    <i class="fa fa-map-marker-alt color-red-dark"></i>
                    <span>{{ $event->tempat }}</span>
                    <strong>{{ $event->alamat }}</strong>
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

            <h4>Bahan dan Materi Event</h4>

            <table class="table table-bordered rounded-sm shadow-l" style="overflow: hidden;">
                <thead>
                    <tr class="bg-gray-light text-center">
                        <th scope="col" class="color-theme py-3 font-14">No</th>
                        <th scope="col" class="color-theme py-3 font-14">Materi</th>
                        <th scope="col" class="color-theme py-3 font-14">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                @php

                        $dataArray2 = $event->materi;
                        //dd($dataArray2);

                    @endphp

                    @foreach ($dataArray2 as $index => $value)
                    <tr>
                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                        <td class="">{{$value['title']}}</td>
                        <td class="text-center">
                            <div class="btn-group mb-2 gap-1" role="group" aria-label="Basic mixed styles example">
                            <button class="btn btn-xxs btn-warning" onclick="location.href='{{ asset('storage/'.$value['file']) }}'">
                              <i class="fa fa-download"></i>
                                </button>
                                <!-- <a href="{{ route('file.download', ['file' => $value['title']]) }}" class="btn btn-xxs btn-warning">
                                        <i class="fa fa-download"></i> Download
                                    </a> -->
                            </div>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>
</div>

@endsection
