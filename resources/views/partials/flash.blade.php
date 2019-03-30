{{-- todo: cookie flash --}}

@if ($message = session()->get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = session()->get('error'))
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = session()->get('warning'))
    <div class="alert alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = session()->get('info'))
    <div class="alert alert-info alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
        Please check the form below for errors
    </div>
@endif
