@extends('layouts.public')

@section('content')

<div class="container mx-auto">
    <div class="card-header">{{ __('Login') }}</div>
        @include('partials.auth.form-login')
    </div>
</div>
@endsection
