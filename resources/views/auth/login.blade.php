@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        @include('partials.auth.form-login')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
