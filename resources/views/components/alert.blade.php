<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    @if (session()->has('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>success</strong> {{ session()->get('sukses') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>error</strong> {{ session()->get('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
</div>
