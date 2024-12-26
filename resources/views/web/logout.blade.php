@php
    $aksesExists = getUserId(session('user_id'))??false;
@endphp

@if ($aksesExists)
      <a href="#" data-menu="#" class="bg-fade-highlight-light shadow-xl preload-img dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
          <ul class="dropdown-menu text-center btn-xxs rounded-s bg-orange-light" aria-labelledby="dropdownMenuButton1">
            <li>
            <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="dropdown-item"  type="submit"><strong>Log Out</strong></button>
            </form>
        </li>
          </ul>
@else
<a href="#" data-menu="#" class="bg-fade-highlight-light shadow-xl preload-img dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" data-src="{{ asset('frontend') }}/images/pictures/logokubar.png"></a>
          <ul class="dropdown-menu text-center btn-xxs rounded-s bg-green-light" aria-labelledby="dropdownMenuButton1">
            <li>

            <a class="dropdown-item" href="/"><strong>Login</strong></a>

          </ul>
@endif



