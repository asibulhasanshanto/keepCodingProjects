@extends('Layouts.layout')
@section('body')
    <h1 class="text-2xl">{{$recipe->name}}</h1>
    <p>description:</p>
    <p class="text-xl">{{$recipe->description}}</p>
    <p>instruction:</p>
    <p>{{$recipe->instruction}}</p>

    {{-- create and wonderfull ingradients list --}}
    <ul>
        @foreach ($ingradients as $ingradient)
            <li class="text-red-400 bg-gray-300 m-3">{{$ingradient->name}}</li>
        @endforeach
    </ul>
@endsection