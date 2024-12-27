@extends('app.home')
@section('content')

<div class="page-content">
        
    <div class="page-title page-title-small dropdown ">
        <h2><a href="{{ route('event') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Kembali</h2>
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
        <img data-src="{{ asset('frontend') }}/images/pictures/13.jpg" class="preload-img img-fluid bottom-20">
        <div class="content mb-0">
            <h4>About Event</h4>
            <p class="mb-2">
                Are you a fan of paintball? Then this is the even for you! Join today and you get free gear for the duration of the event.
            </p>

            <div class="list-group list-custom-large mb-0">
                <a href="#">
                    <i class="far fa-calendar color-blue-dark"></i>
                    <span>Sat, May 25, 2029</span>
                    <strong>10:00 AM -  11:30 AM</strong>
                </a>
                <a href="https://maps.app.goo.gl/xnBnH4aHwwimWWjy6" target="_blank">
                    <i class="fa fa-map-marker-alt color-red-dark"></i>
                    <span>Aula Kantor Distan Kubar</span>
                    <strong>Jalan Usaha Tani Nomor 10</strong>
                    <span class="badge bg-blue-dark font-10 rounded-xs mb-0">SEE ON MAP</span>
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#">
                    <i class="far fa-calendar color-blue-dark mb-2"></i>
                    <span>Narasumber</span>
                    <strong>Dr. Tahir, MP dan Ir. Rano, MP</strong>
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
                    <tr>
                        <th scope="row" class="text-center">1</th>
                        <td class="">Cara merawat tanaman Anggrek</td>
                        <td class="text-center">
                            <div class="btn-group mb-2 gap-1" role="group" aria-label="Basic mixed styles example"> 
                                <button  class="btn btn-xxs  btn-warning" onclick="location.href=#"><i class="fa fa-download"></i></button> 
                            </div>                
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">2</th>
                        <td class="">rekayasa Genetik Pada Padi Gunung</td>
                        <td class="text-center">
                            <div class="btn-group mb-2 gap-1" role="group" aria-label="Basic mixed styles example"> 
                                <button  class="btn btn-xxs  btn-warning" onclick="location.href=#"><i class="fa fa-download"></i></button> 
                            </div>                
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center">3</th>
                        <td class="">Buduaya padi hidroponik</td>
                        <td class="text-center">
                            <div class="btn-group mb-2 gap-1" role="group" aria-label="Basic mixed styles example"> 
                                <button  class="btn btn-xxs  btn-warning" onclick="location.href=#"><i class="fa fa-download"></i></button> 
                            </div>                
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>    

@endsection