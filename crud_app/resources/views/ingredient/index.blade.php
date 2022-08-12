@extends('Layouts.layout')
@section('title')
    <title>Ingredient lists</title>
@endsection
@section('body')
    <div class="flex flex-wrap justify-center">
        @foreach ($ingredients as $ingredient)
            <div class="w-full max-w-sm m-2">
                <div class="bg-white border-2 border-gray-400 rounded-lg shadow-md overflow-hidden">
                    <div class="p-1">
                        <div class="flex justify-center">
                            <img src="{{ asset('images/food1.jpg') }}" alt="food1" class="w-full">
                        </div>
                        <div class="font-bold text-xl text-center px-6 py-4">
                            {{ $ingredient->name }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
