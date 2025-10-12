@extends('layouts.auth')

@section('content')
    <h2 class="text-lg font-medium text-gray-900">Forgot your password?</h2>

    @if (session('status'))
        <div class="mt-4 text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="mt-4">
        @csrf

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-3">{{ __('Email Password Reset Link') }}</x-primary-button>
        </div>
    </form>
@endsection
