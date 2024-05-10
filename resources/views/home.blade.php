@extends('layouts.app')

<!-- Other way for pass the title, because is just a one line of code -->
@section('title', 'Laravel 11')

@push('css')
    <style>
        body{
            background-color: #f3f3f3
        }
    </style>
@endpush

@push('css')
    <style>
        body{
            color: red
        }
    </style>
@endpush

@section('content')
    
    <div class="max-w-4xl mx-auto px-4">

        <x-alert2 type="info" class="mb-4">
            <x-slot name="titlel">
                Titulo
            </x-slot>
        
            Texto prueba variable slot
        </x-alert2>

        <p>Hola mundo</p>
    </div>

@endsection