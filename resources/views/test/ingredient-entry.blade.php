@extends('layouts.public')

@section('base_title', 'Ingredient Entry Test')

@section('content')

@php
    $categories = \App\Models\IngredientCategory::all();
    $types      = \App\Models\IngredientType::all();
    // id
    // name
    // description
    // ingredient_type_id
@endphp

    <div class="container mx-auto max-w-lg">
        <h1 class="mt-2 mb-4">Add Ingredient</h1>

        <form method="POST" action="{{ route('test.ingredient-entry.post') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            {{---------- Ingredient Category ----------}}
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="category">
                    Category
                </label>
                <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        id="category"
                        name="category">
                    <option selected disabled value="">Select Category...</option>
                    @if(count($categories) > 0)
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            {{---------- Ingredient Type ----------}}
            {{-- todo: these need to filter with javascript --}}
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="type">
                    Type
                </label>
                <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
                        id="type"
                        name="type">
                    <option selected disabled value="">Select Type...</option>
                    @if(count($types) > 0)
                        @foreach($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            {{---------- Ingredient Name ----------}}
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                       type="text"
                       id="name"
                       name="name"
                       placeholder="Flour" />
            </div>

            {{---------- Ingredient Description ----------}}
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="description">
                    Description (optional)
                </label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                          id="description"
                          name="description"
                          rows="6"
                          placeholder=""></textarea>
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