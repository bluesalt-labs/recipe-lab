@extends('layouts.public')

@section('base_title', 'Purchase Entry Test')

@section('content')

@php
    $merchants = \App\Models\Merchant::all();
    $ingredients = \App\Models\Ingredient::all();
@endphp

<div class="container mx-auto max-w-lg">
    <h1 class="mt-2 mb-4">Purchase Entry</h1>

    <form method="POST" action="{{ route('test.purchase-entry.post') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf

        {{---------- Merchant ----------}}
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="merchant">
                Merchant
            </label>
            <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                    id="merchant"
                    name="merchant">
                <option selected disabled value="">Select Merchant...</option>
                @if(count($merchants) > 0)
                @foreach($merchants as $merchant)
                <option value="{{ $merchant->id }}">{{ $merchant->name }}</option>
                @endforeach
                @endif
            </select>
        </div>

        {{---------- Merchant Product 1 ----------}}
{{--
    merchant_id
ingredient_id
cost_unit_id
measure_unit_id
cost
units
purchased_at
created_at
--}}
        <div class="mb-4">
            <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                Username
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                   type="text"
                   id="username"
                   name="username"
                   placeholder="Username" />
        </div>


        <hr class="border-dark m-5" />
        <div class="clearfix">
            <button type="submit" class="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded float-right clearfix">Submit</button>
        </div>
    </form>



@if(isset($postData))
<div class="bg-black text-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <hr class="border-light" />
<code><pre>{{ json_encode($postData, JSON_PRETTY_PRINT) }}</pre></code>
</div>

@endif

</div>
@endsection