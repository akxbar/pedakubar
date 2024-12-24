<div id="menu-warning-1" class="menu menu-box-right menu-box-detached rounded-m" data-menu-height="10"
    data-menu-effect="menu-over">
    <h1 class="text-center mt-5 text-uppercase font-700">Log Out!</h1>
    <img class="mx-auto mb-3 text-center" src="{{ asset('frontend') }}/images/logopeda2.png" width="100">
    <a href="/"
        class="mb-3 close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-700 bg-green-light">Login</a>



    <form action="{{ url('logout') }}" method="POST">
        @csrf
        <button
            class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-700 bg-red-light"
            type="submit"> Logout </button>
    </form>
</div>