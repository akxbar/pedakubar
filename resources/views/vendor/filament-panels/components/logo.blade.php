@php
$size = auth()->check() ? "30px" : "100px";
@endphp

@if(!auth()->check())
<table>
    <tr>
        <td align="center">
            <img src="{{asset('frontend/images/pictures/logokubar.png') }}" class="logo" alt="logo" width="{{ $size }} " />
        <td>
    </tr>
    <tr>
        <td align="center">
            <h1> SipedaKubar </h1>
        </td>
    </tr>
</table>

@else
<div class="flex items-center space-x-4">
    <img src="{{ asset('frontend/images/pictures/logokubar.png') }}" class="logo" alt="logo" width="{{ $size }}" />
    <span class="text-lg font-semibold">SipedaKubar</span>
</div>
@endif
