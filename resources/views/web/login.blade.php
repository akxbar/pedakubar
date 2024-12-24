@extends('app.home')
@section('content')

<div class="page-content">

    <div class="page-title page-title-small">
        <h2><a href="#" data-back-button></a>Log In</h2>
    </div>
    <div class="card header-card shape-rounded" data-card-height="100">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
    </div>


    <div class="card" data-card-height="cover">
        <div class="card-center ">
            <img class="mx-auto mb-3 text-center" src="{{ asset('frontend') }}/images/logopeda1.png" width="400">
            <div class="card card-style">
                <form action="{{ route('auth.authenticate') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="content mt-2 mb-0">
                        <div class="input-style no-borders has-icon validate-field mb-4">
                            <i class="fa fa-user"></i>
                            <input name="email" type="email" class="form-control validate-name" id="form1a"
                                placeholder="Email">
                            <label for="form1a" class="color-blue-dark font-10 mt-1">Email</label>
                            <i class="fa fa-times disabled invalid color-red-dark"></i>
                            <i class="fa fa-check disabled valid color-green-dark"></i>
                            <em>(required)</em>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input-style no-borders has-icon validate-field mb-4">
                            <i class="fa fa-lock"></i>
                            <input name="password" type="password" class="form-control validate-password" id="form3a"
                                placeholder="Password">
                            <label for="form3a" class="color-blue-dark font-10 mt-1">Password</label>
                            <i class="fa fa-times disabled invalid color-red-dark"></i>
                            <i class="fa fa-check disabled valid color-green-dark"></i>
                            <em>(required)</em>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit"
                            class="btn btn-m mt-4 mb-4 btn-full bg-green-dark rounded-sm text-uppercase font-900">Login</button>

                    </div>
                </form>
                @if ($errors->any())
                    <div class="text-red-500 text-sm">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="card card-style">
                <div class="content text-center font-800">
                    <p>
                        MELALUI PEKAN DAERAH XI PETANI NELAYAN PROVINSI KALIMANTAN TIMUR TAHUN 2025 KITA TINGKATKAN
                        DAYA
                        SAING DAN PRODUK UNGGULAN PETANI NELAYAN MENDUKUNG KALIMANTAN TIMUR
                        SEBAGAI PENYANGGA IBUKOTA NUSANTARA
                    </p>
                </div>
            </div>
        </div>
        <div class="card-overlay bg-theme opacity-95"></div>
    </div>
</div>

@endsection