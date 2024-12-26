@extends('app.home')
@section('content')
        
<div class="page-content">
        
    <div class="page-title page-title-small dropdown">
        <h2><a href="#" data-back-button></a>Pengumuman</h2>
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
        <div class="content mb-4">
            <h2><i class="fa fa-bullhorn me-3 mt-1 mb-4 font-28 color-red-dark"></i>Briefing</h2>
            <div class="row mb-0 pt-3 bg-mint-dark rounded-xs">
                <div class="col-4">
                    <p class="text-start color-white font-20 mb-0 pb-3 text-center"><i class="fa fa-calendar-alt color-white me-2"></i> <br>15 May 2025</p>
                </div>
                <div class="col-4">
                    <p class="text-center color-white font-20 mb-0 pb-3 text-center"><i class="fa fa-clock me-2 color-white"></i> <br> 09:00 WITA</p>
                </div>

                <div class="col-4" >
                    <a href="https://maps.app.goo.gl/xnBnH4aHwwimWWjy6" target="_blank">
                    <p class="text-end color-white font-20 mb-0 pb-3 text-center"> <i class="fa fa-map-marker me-2 color-white"></i><br>Lobi Kantor Bupati</p> 
                
                </div>
                    </a>
            </div>
            <div class="divider"></div>
            <div class="d-flex">
                <div class="w-35 border-right pe-3 border-highlight">
                    <h5>Description</h5>
                    <p>
                        Are you a fan of paintball? Then this is the even for you! Join today and you get free gear for the duration of the event. 
                        Protection required for all visitors that plan on walking the course.
                    </p>
                </div>
            </div>

        </div>
        
    </div>


    <div class="card card-style">
        <div class="content mb-4">
            <h2><i class="fa fa-bullhorn me-3 mt-1 mb-4 font-28 color-red-dark"></i>Woro-woro</h2>
            <div class="row mb-0 pt-3 bg-mint-dark rounded-xs">
                <div class="col-4">
                    <p class="text-start color-white font-20 mb-0 pb-3 text-center"><i class="fa fa-calendar-alt color-white me-2"></i> <br>15 May 2025</p>
                </div>
                <div class="col-4">
                    <p class="text-center color-white font-20 mb-0 pb-3 text-center"><i class="fa fa-clock me-2 color-white"></i> <br> 09:00 WITA</p>
                </div>

                <div class="col-4" >
                    <a href="https://maps.app.goo.gl/xnBnH4aHwwimWWjy6" target="_blank">
                    <p class="text-end color-white font-20 mb-0 pb-3 text-center"> <i class="fa fa-map-marker me-2 color-white"></i><br>Lobi Kantor Bupati</p> 
                
                </div>
                    </a>
            </div>
            <div class="divider"></div>
            <div class="d-flex">
                <div class="w-35 border-right pe-3 border-highlight">
                    <h5>Description</h5>
                    <p>
                        Are you a fan of paintball? Then this is the even for you! Join today and you get free gear for the duration of the event. 
                        Protection required for all visitors that plan on walking the course.
                    </p>
                </div>
            </div>

        </div>
        
    </div>

       

</div> 

@endsection