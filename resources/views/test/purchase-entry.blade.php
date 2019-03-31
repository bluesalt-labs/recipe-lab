@extends('layouts.public')

@section('base_title', 'Purchase Entry Test')


@section('content')
<div class="container mx-auto max-w-lg">
    <h1 class="mt-2 mb-4">Purchase Entry</h1>

    <form method="POST" action="{{ route('test.purchase-entry.post') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline"
                   type="text"
                   id="username"
                   name="username"
                    placeholder="Username">
        </div>

        <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded">Submit</button>
    </form>



@if(isset($postData))
    <hr />
<code><pre>{{ json_encode($postData, JSON_PRETTY_PRINT) }}</pre></code>
@endif

</div>
@endsection