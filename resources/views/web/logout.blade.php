@php
    $aksesExists = getUserId(session('user_id'))??false;
@endphp

@if ($aksesExists)
    <div id="menu-warning-1" class="menu menu-box-right menu-box-detached rounded-m" data-menu-height="10"
        data-menu-effect="menu-over">
        <h4 class="text-center mt-5 text-uppercase font-700">{{ session('user_name', 'Guest') }}</h4>
        <img class="mx-auto mb-3 text-center" src="{{ asset('frontend') }}/images/logopeda2.png" width="100">


        <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button
                class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-700 bg-red-light"
                type="submit"> Logout </button>
        </form>
    </div>
@else
    <div id="menu-warning-1" class="menu menu-box-right menu-box-detached rounded-m" data-menu-height="10"
        data-menu-effect="menu-over">

        <h4 class="text-center mt-5 text-uppercase font-700">{{ session('user_name', 'Guest') }} </h4>
        <img class="mx-auto mb-3 text-center" src="{{ asset('frontend') }}/images/logopeda2.png" width="100">
        <a href="/"
            class="mb-3 close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-700 bg-green-light">Login</a>
    </div>
@endif
