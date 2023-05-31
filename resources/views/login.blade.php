@extends('layouts.guest')

@section('title', 'Login')

@section('content')

    @if(session('error'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
            <ul>
                <li class="mb-4">{{ session('error') }}</li>
            </ul>
        </div>
    @endif
    <div class="flex h-screen">
        <x-forms.login></x-forms.login>
    </div>
@endsection
