@extends('layouts.base')

@push('scripts')
<script src="{{ mix('/js/public.js') }}" defer></script>
@endpush

@push('styles')
<link href="{{ mix('/css/public.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('base-content')
    @include('partials.public.header')

    <main>
    @yield('content')
    </main>

    @include('partials.public.footer')
@endsection
