@extends('app.home')
@section('content')

<div class="page-content">

    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button></a>Pengumuman</h2>
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

    @forelse ($posts as $post)
        <div class="card card-style">
            <div class="content mb-4">
                <h2><i class="fa fa-bullhorn me-3 mt-1 mb-4 font-28 color-red-dark"></i>{{$post->title}}</h2>
                <div class="row mb-0 pt-3 bg-mint-dark rounded-xs">
                    <div class="col-4">
                        <p class="text-start color-white font-20 mb-0 pb-3 text-center"><i
                                class="fa fa-calendar-alt color-white me-2"></i>
                            <br>{{$post->tanggal?->format('d F Y')}}
                        </p>
                    </div>
                    <div class="col-4">
                        <p class="text-center color-white font-20 mb-0 pb-3 text-center"><i
                                class="fa fa-clock me-2 color-white"></i> <br> {{ $post->tanggal?->format('H:i') }}
                            WITA
                        </p>
                    </div>

                    <div class="col-4">
                        <a href="{{$post->link_gmap}}" target="_blank">
                            <p class="text-end color-white font-20 mb-0 pb-3 text-center"> <i
                                    class="fa fa-map-marker me-2 color-white"></i><br>{{$post->tempat}}</p>

                    </div>
                    </a>
                </div>
                <div class="divider"></div>
                <div class="d-flex">
                    <div class="w-35 border-right px-3 border-highlight"> <!-- Ganti pe-3 dengan px-3 -->
                        <h5>Description</h5>
                        @if ($post->image)
                            <div class="text-center">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                                    class="img-fluid rounded-lg mb-3 d-block mx-auto" style="max-width: 100%; height: auto;">
                            </div>
                        @endif
                        {!! $post->body !!}
                    </div>
                </div>



            </div>

        </div>




        <nav aria-label="pagination-demo">
            <ul class="pagination pagination- justify-content-center">
                        {{ $posts->links() }}
            </ul>
        </nav>
    @empty

    @endforelse







</div>

@endsection