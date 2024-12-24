@extends('app.home')
@section('content')

<div class="page-content">

    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button></a>Event</h2>
        <a href="#" data-menu="menu-warning-1" class="bg-fade-highlight-light shadow-xl preload-img" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

        <!--Menu Warning-->
    <!---------------->
    <!---------------->
    <div id="menu-warning-1" class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-height="10"
         data-menu-effect="menu-over">
         <h1 class="text-center mt-5 text-uppercase font-700">Log Out!</h1>
         <img class="mx-auto mb-3 text-center" src="{{ asset('frontend') }}/images/logopeda2.png" width="100">
        <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-700 bg-red-light">Log Out</a>
    </div>
    <!---------------->
    <!---------------->
        

    <div class="card card-style">
        <div class="content mb-0">
            <h4>Penyelenggaraan PEDA KTNA Provinsi Kalimantan Timur XI Tahun 2025 </h4>
            <p>
                Similar to action sheets you can create store actions for your store elements that will be triggered on specific buttons. For example, carts, wishlists and more.
            </p>

            <div class="list-group list-custom-large ">
                <a data-bs-toggle="collapse" class="no-effect mb-3 " href="#collapse-5">
                    <i class="fa fa-list font-20 color-teal-dark"></i>
                    <span>Upacara dan Apresiasi </span>
                    <strong>A list of cart Items</strong>
                    <i class="fa fa-angle-down"></i>
                </a>

                <div class="card card-style">
                    <div class="collapse ps-2 pe-4" id="collapse-5">
                        <div class="list-group list-custom-small">
                            <a href="#"  data-menu="cart-item-list">
                                <i class="fa font-13 fa-home color-green-dark"></i>
                                <span>Pembukaan</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="#" data-menu="cart-item-list1">
                                <i class="fa font-13 fa-suitcase color-brown-light"></i>
                                <span>Klinik</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="#" data-menu="cart-item-list2">
                                <i class="fa font-13 fa-building color-gray-dark"></i>
                                <span>Puskesmas</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                            <a href="#" data-menu="cart-item-list">
                                <i class="fa font-13 fa-building color-gray-dark"></i>
                                <span>Puskesmas Pembantu</span>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                      

                <a href="#" data-menu="cart-item-list1">
                    <i class="fa fa-list font-20 color-teal-dark"></i>
                    <span>Kepemimpinan dan Kemandirian Kontak tani Nelayan</span>
                    <strong>Edit Cart Item Options</strong>
                    <i class="fa fa-angle-right"></i>
                </a>

                <a href="#" data-menu="cart-item-list2">
                    <i class="fa fa-list font-20 color-teal-dark"></i>
                    <span>Kemitraan Usaha dan Jaringan Informasi Agribisnis</span>
                    <strong>Edit Cart Item Options</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="cart-item-list2">
                    <i class="fa fa-list font-20 color-teal-dark"></i>
                    <span>Pengembangan Teknologi dan Kualitas Produksi Agribisnis</span>
                    <strong>Edit Cart Item Options</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" data-menu="cart-item-list2">
                    <i class="fa fa-list font-20 color-teal-dark"></i>
                    <span>Study Banding, Widyawisata dan Pagelaran Seni Budaya</span>
                    <strong>Edit Cart Item Options</strong>
                    <i class="fa fa-angle-right"></i>
                </a>

            </div>

        </div>
    </div>

    <!-- footer and footer card-->
    <div class="footer" data-menu-load="menu-footer.html"></div>
</div>
<!-- end of page content-->


<div id="cart-item-list"
     class="menu menu-box-bottom menu-box-detached rounded-m"
     data-menu-height="550"
     data-menu-effect="menu-over">

     <div class="content">
        <div class="d-flex">
            <div class="me-auto">
                <img src="{{ asset('frontend') }}/images/food/1s.jpg" class="rounded-m shadow-xl" width="110">
            </div>
            <div class="ms-auto w-100 ps-3">
                <h5 class="font-17 font-600 pb-0"></h5>
                {{-- <p class="mb-0 mt-n2 color-highlight font-11">Ready in 15 Minutes</p> --}}
                <div class="clearfix"></div>
                <div class="d-flex">
                    <div>
                        <h3 class="font-12 font-700 pt-2 mt-4 ">Kegiatan Pameran Bibit Unggulan Kabupaten Kubar</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider mt-1 mb-1"></div>
        <div class="row mb-1">
            <div class="col-12">
                <div>
                    <h4>About Event</h4>
                    <p class="mb-4">
                        Are you a fan of paintball? Then this is the even for you! Join today and you get free gear for the duration of the event.
                    </p>
               </div>
            </div>
            <div class="list-group list-custom-large mb-2">
                <a href="#">
                    <i class="far fa-calendar color-blue-dark"></i>
                    <span>Sat, May 25, 2029</span>
                    <strong>10:00 AM -  11:30 AM</strong>
                </a>
                <a href="https://maps.app.goo.gl/xnBnH4aHwwimWWjy6" target="_blank">
                    <i class="fa fa-map-marker-alt color-red-dark"></i>
                    <span>Aula Kantor Distan Kubar</span>
                    <strong>Jalan Usaha Tani Nomor 10</strong>
                    <span class="badge bg-highlight">SEE ON MAP</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#">
                    <i class="far fa-calendar color-blue-dark"></i>
                    <span>Narasumber</span>
                    <strong>10:00 AM -  11:30 AM</strong>
                </a>
                <div class="divider"></div>
                <a href="#" class="btn text-uppercase font-900 bg-highlight rounded-sm mb-0 shadow-xl btn-m ">Link Materi</a>
            </div>
        </div>
    </div>
</div>

<div id="cart-item-list1"
     class="menu menu-box-bottom menu-box-detached rounded-m"
     data-menu-height="440"
     data-menu-effect="menu-over">

    <div class="content">
        <div class="d-flex">
            <div class="me-auto">
                <img src="{{ asset('frontend') }}/images/food/1s.jpg" class="rounded-m shadow-xl" width="110">
            </div>
            <div class="ms-auto w-100 ps-3">
                <h5 class="font-17 font-600 pb-0"></h5>
                {{-- <p class="mb-0 mt-n2 color-highlight font-11">Ready in 15 Minutes</p> --}}
                <div class="clearfix"></div>
                <div class="d-flex">
                    <div>
                        <h3 class="font-12 font-700 pt-2 mt-4 ">Kegiatan Pengenalan Alat pertanian</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider mt-1 mb-1"></div>
        <div class="row mb-1">
            <div class="col-12">
                <div>
                    <h4>About Event</h4>
                    <p class="mb-4">
                        Are you a fan of paintball? Then this is the even for you! Join today and you get free gear for the duration of the event.
                    </p>
               </div>
            </div>
            <div class="list-group list-custom-large mb-2">
                <a href="#">
                    <i class="far fa-calendar color-blue-dark"></i>
                    <span>Sat, May 25, 2029</span>
                    <strong>10:00 AM -  11:30 AM</strong>
                </a>
                <a href="#">
                    <i class="fa fa-map-marker-alt color-red-dark"></i>
                    <span>Aula Kantor Distan Kubar</span>
                    <strong>Jalan Usaha Tani Nomor 10</strong>
                    <span class="badge bg-highlight">SEE ON MAP</span>
                    <i class="fa fa-angle-right"></i>
                </a>

            </div>
        </div>
    </div>

</div>

<div id="cart-item-list2"
     class="menu menu-box-bottom menu-box-detached rounded-m"
     data-menu-height="440"
     data-menu-effect="menu-over">

    <div class="content">
        <div class="d-flex">
            <div class="me-auto">
                <img src="{{ asset('frontend') }}/images/food/1s.jpg" class="rounded-m shadow-xl" width="110">
            </div>
            <div class="ms-auto w-100 ps-3">
                <h5 class="font-17 font-600 pb-0"></h5>
                {{-- <p class="mb-0 mt-n2 color-highlight font-11">Ready in 15 Minutes</p> --}}
                <div class="clearfix"></div>
                <div class="d-flex">
                    <div>
                        <h3 class="font-12 font-700 pt-2 mt-4 ">Kegiatan Lomba Teknologi</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider mt-1 mb-1"></div>
        <div class="row mb-1">
            <div class="col-12">
                <div>
                    <h4>About Event</h4>
                    <p class="mb-4">
                        Are you a fan of paintball? Then this is the even for you! Join today and you get free gear for the duration of the event.
                    </p>
               </div>
            </div>
            <div class="list-group list-custom-large mb-2">
                <a href="#">
                    <i class="far fa-calendar color-blue-dark"></i>
                    <span>Sat, May 25, 2029</span>
                    <strong>10:00 AM -  11:30 AM</strong>
                </a>
                <a href="https://maps.app.goo.gl/xnBnH4aHwwimWWjy6" target="_blank">
                    <i class="fa fa-map-marker-alt color-red-dark"></i>
                    <span>Aula Kantor Distan Kubar</span>
                    <strong>Jalan Usaha Tani Nomor 10</strong>
                    <span class="badge bg-highlight">SEE ON MAP</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#">
                    <i class="far fa-calendar color-blue-dark"></i>
                    <span>Narasumber</span>
                    <strong>10:00 AM -  11:30 AM</strong>
                </a>
                <div class="divider"></div>
                <a href="#" class="btn text-uppercase font-900 bg-highlight rounded-sm mb-3 shadow-xl btn-m btn-full">Link Materi</a>
            </div>
        </div>
    </div>

</div>

@endsection