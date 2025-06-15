@extends('app.home')

@section('content')
<div class="page-content">

    <!-- Header & Gambar -->
    <div class="page-title page-title-small dropdown">
        <h2><a href="#" data-back-button></a>Event</h2>
        @include('web.logout')
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="{{ asset('frontend') }}/images/pictures/20s.jpg"></div>
    </div>

    <!-- Konten Event -->
    <div class="card card-style">
        <div class="content mb-0">
            <h4>Penyelenggaraan PEDA KTNA Provinsi Kalimantan Timur XI Tahun 2025 </h4>
            <p>Event PEDA KTNA Provinsi Kalimantan Timur XI Tahun 2025</p>

            <div class="accordion mt-4" id="accordion-1">
                @foreach ($kategoris as $kat)
                <div class="card card-style shadow-0 {{ $kat->color ?? 'bg-orange-light' }} mb-1">
                    <button class="btn accordion-btn color-white no-effect" data-bs-toggle="collapse" data-bs-target="#collapse{{ $kat->id }}">
                        {{ $kat->title }}
                        <i class="fa fa-chevron-down font-10 accordion-icon"></i>
                    </button>
                    <div id="collapse{{ $kat->id }}" class="collapse bg-theme" data-bs-parent="#accordion-1">
                        <div class="pt-3 pb-3">
                            <div class="list-group list-custom-small">
                                @foreach ($events as $event)
                                @if ($kat->id == $event->kategori_id)
                                <a href="#" class="open-event-modal" data-id="{{ $event->id }}">
                                    <i class="fa font-13 fa-calendar color-orange-dark"></i>
                                    <span>{{ $event->title }}</span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    <!-- Footer -->
    <div class="footer" data-menu-load="menu-footer.html"></div>
</div>

<!-- Overlay untuk close modal via klik luar -->
<div id="eventModalOverlay" style="position: fixed; top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.5); z-index: 9998; display: none;">
</div>

<!-- Modal dinamis -->
<div id="eventModal" class="menu menu-box-bottom menu-box-detached rounded-m" style="height: 50vh; z-index: 9999;" data-menu-effect="menu-push">

    <div class="content" id="eventModalContent" style="position: relative; max-height: 100%; overflow-y: auto;">
        <div class="text-center pt-5">
            <div class="spinner-border text-primary" role="status"></div>
        </div>
    </div>
</div>

<!-- Script jQuery dan handler modal -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.open-event-modal', function(e) {
        e.preventDefault();
        let eventId = $(this).data('id');

        // Tampilkan overlay dan modal
        $('#eventModalOverlay').fadeIn();
        $('#eventModal').addClass('menu-active');

        // Spinner loading sementara
        $('#eventModalContent').html(`
            <div class="text-center pt-5">
                <div class="spinner-border text-primary" role="status"></div>
            </div>
        `);

        // Load isi modal dari controller via AJAX
        $.get(`/event/detail/${eventId}`, function(response) {
            $('#eventModalContent').html(response);
        }).fail(function() {
            $('#eventModalContent').html(`<p class="text-danger text-center">Gagal memuat data</p>`);
        });
    });

    // Klik luar modal untuk menutup
    $(document).on('click', '#eventModalOverlay', function() {
        $('#eventModal').removeClass('menu-active');
        $('#eventModalOverlay').fadeOut();
    });

</script>
@endsection
