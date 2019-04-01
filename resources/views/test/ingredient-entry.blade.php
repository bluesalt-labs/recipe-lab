@extends('layouts.public')

@section('base_title', 'Ingredient Entry Test')

@section('content')

@php
$categories     = \App\Models\IngredientCategory::all()->sortBy('name');
$types          = \App\Models\IngredientType::all()->sortBy('name');
$allIngredients = \App\Models\Ingredient::all()->sortBy('ingredient_type_id');

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



        @if(isset($ingredient))
        <div class="bg-black text-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <hr class="border-light" />
            <code><pre>{{ json_encode($ingredient, JSON_PRETTY_PRINT) }}</pre></code>
        </div>
        @endif

        @if(isset($allIngredients))

        <table class="table-collapse shadow-md rounded max-w-lg w-full mx-auto">
            <thead class="text-left border-b border-grey bg-grey-lightest">
            <tr>
                <th class="p-3">Name</th>
                <th class="p-3">Type</th>
                <th class="p-3">Description</th>
            </tr>
            </thead>
            <tbody>
                @foreach($allIngredients as $ingredientListItem)
                <tr>
                    <td class="p-2">{{ $ingredientListItem->name }}</td>
                    <td class="p-2">{{ $ingredientListItem->ingredientType->name }}</td>
                    <td class="p-2">{{ $ingredientListItem->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
@endsection