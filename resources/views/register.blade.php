@extends('layouts.guest')

@section('title', 'Register')

@section('content')
    @if(session('error') || $errors->any())
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
            <ul>
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <li class="mb-4">{{ $error }}</li>
                    @endforeach
                @endif
                @if(session('error'))
                    <li class="mb-4">{{ session('error') }}</li>
                @endif
            </ul>
        </div>
    @endif
    <div class="flex h-screen">
        <x-forms.register></x-forms.register>
    </div>
@endsection
