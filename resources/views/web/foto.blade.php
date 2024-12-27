@extends('app.home')
@section('content')

<div class="page-content">

    <div class="page-title page-title-small dropdown">
        <h2><a href="{{ route('beranda') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
        <a href="#" data-menu="#" class="bg-fade-highlight-light shadow-xl preload-img dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
          <ul class="dropdown-menu text-center btn-xxs rounded-s bg-orange-light" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#"><strong>Log Out</strong></a></li>
          </ul>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h4 class="mb-0">Galery Foto</h4>
            <p>
                Galery Foto Kegiatan Seriap hari
            </p>
        </div>

        <div class="card card-style bg-theme pb-0">
            <div class="content" id="tab-group-1">
                <div class="tab-controls tabs-small tabs-rounded" data-highlight="bg-highlight">
                    <a href="#" data-active data-bs-toggle="collapse" data-bs-target="#tab-1">Day 1</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-2">Day 2</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-3">Day 3</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-4">Day 4</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-5">Day 5</a>
                    <a href="#" data-bs-toggle="collapse" data-bs-target="#tab-6">Day 6</a>
                </div>

                <div class="clearfix mb-3"></div>

                <div data-bs-parent="#tab-group-1" class="collapse show" id="tab-1">
                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                  @forelse ( $foto1 as $item)
                      <a data-gallery="gallery-1" href="{{ asset('storage') }}/{{ $item->image }}" title="Vynil and Typerwritter">
                                <img src="images/empty.png" data-src="{{ asset('storage') }}/{{ $item->image }}" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                         @empty
                         <p class="text-center">No photos available in this gallery.</p>

                      @endforelse

                        </div>
              </div>


                </div>
              <!-- batas atas -->

             <div data-bs-parent="#tab-group-1" class="collapse" id="tab-2">
                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                  @forelse ( $foto2 as $item)
                      <a data-gallery="gallery-2" href="{{ asset('storage') }}/{{ $item->image }}" title="Vynil and Typerwritter">
                                <img src="images/empty.png" data-src="{{ asset('storage') }}/{{ $item->image }}" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                         @empty
                         <p class="text-center">No photos available in this gallery.</p>

                      @endforelse

                        </div>
                    </div>
                </div>



                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-3">
                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                  @forelse ( $foto3 as $item)
                      <a data-gallery="gallery-3" href="{{ asset('storage') }}/{{ $item->image }}" title="Vynil and Typerwritter">
                                <img src="images/empty.png" data-src="{{ asset('storage') }}/{{ $item->image }}" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                         @empty
                         <p class="text-center">No photos available in this gallery.</p>

                      @endforelse

                        </div>
                    </div>
                </div>


                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-4">
                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                  @forelse ( $foto4 as $item)
                      <a data-gallery="gallery-4" href="{{ asset('storage') }}/{{ $item->image }}" title="Vynil and Typerwritter">
                                <img src="images/empty.png" data-src="{{ asset('storage') }}/{{ $item->image }}" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                         @empty
                         <p class="text-center">No photos available in this gallery.</p>
                      @endforelse

                        </div>
                    </div>
                </div>




                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-5">
                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                  @forelse ( $foto5 as $item)
                      <a data-gallery="gallery-5" href="{{ asset('storage') }}/{{ $item->image }}" title="Vynil and Typerwritter">
                                <img src="images/empty.png" data-src="{{ asset('storage') }}/{{ $item->image }}" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                         @empty
                         <p class="text-center">No photos available in this gallery.</p>

                      @endforelse

                        </div>
                    </div>
                </div>



                <div data-bs-parent="#tab-group-1" class="collapse" id="tab-6">
                    <div class="content my-n1">
                        <div class="gallery-views gallery-view-1">
                  @forelse ( $foto6 as $item)
                      <a data-gallery="gallery-6" href="{{ asset('storage') }}/{{ $item->image }}" title="Vynil and Typerwritter">
                                <img src="images/empty.png" data-src="{{ asset('storage') }}/{{ $item->image }}" class="rounded-m preload-img shadow-l img-fluid" alt="img">
                                <div class="caption">
                                    <h4 class="color-theme">Messy Desk?</h4>
                                    <p>Some may consider this to be a very messy desk.</p>
                                    <div class="divider bottom-0"></div>
                                </div>
                            </a>
                         @empty
                         <p class="text-center">No photos available in this gallery.</p>

                      @endforelse

                        </div>
                    </div>
                </div>

             <!-- batas bawah    -->
            </div>
        </div>



    </div>



    <!-- footer and footer card-->
    <div class="footer" data-menu-load="menu-footer.html"></div>
</div>

@endsection
