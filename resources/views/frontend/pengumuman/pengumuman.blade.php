@extends('app.home')
@section('content')

        
<div class="page-content">
        
    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button></a>Pengumuman</h2>
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
        <div class="content mb-4">
            <h3><i class="fa fa-exclamation-triangle me-3 mt-1 mb-4 font-17 color-yellow-dark"></i>Staff Meeting</h3>
            {{-- <p>
                Event aims to discuss and improve company workflow, brainstorming and customer aquisition.
                Attendence is mandatory.
            </p> --}}
            <div class="row mb-0 pt-3 bg-blue-dark">
                <div class="col-4">
                    <p class="text-start color-white mb-0 pb-3"><i class="fa fa-calendar-alt color-white me-2"></i>15 May</p>
                </div>
                <div class="col-4">
                    <p class="text-center color-white mb-0 pb-3"><i class="fa fa-clock me-2 color-white"></i>09:00 AM</p>
                </div>
                <div class="col-4">
                    <p class="text-end color-white mb-0 pb-3"><i class="fa fa-map-marker me-2 color-white"></i>Lapangan Parkir</p>
                </div>
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
            <h3><i class="fa fa-exclamation-triangle me-3 mt-1 mb-4 font-17 color-yellow-dark"></i>Briefing</h3>
            {{-- <p>
                Event aims to discuss and improve company workflow, brainstorming and customer aquisition.
                Attendence is mandatory.
            </p> --}}
            <div class="row mb-0 pt-3 bg-highlight">
                <div class="col-4">
                    <p class="text-start color-white mb-0 pb-3"><i class="fa fa-calendar-alt color-white me-2"></i>15 May</p>
                </div>
                <div class="col-4">
                    <p class="text-center color-white mb-0 pb-3"><i class="fa fa-clock me-2 color-white"></i>09:00 AM</p>
                </div>
                <div class="col-4">
                    <p class="text-end color-white mb-0 pb-3"><i class="fa fa-map-marker me-2 color-white"></i>Lobi Kantor Bupati</p>
                </div>
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