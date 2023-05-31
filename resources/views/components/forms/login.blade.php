<div class="w-full max-w-xl m-auto">
    <div class="bg-white rounded-lg shadow p-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="text-center text-rose-500 text-4xl font-bold mb-12 tracking-widest	uppercase">Login</h1>
            <div class="mb-3">
                <x-inputs.label for="email" :value="__('Email')"/>
                <x-inputs id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                          autofocus/>
            </div>
            <div class="mb-3">
                <x-inputs.label for="password" :value="__('Password')"/>
                <x-inputs id="password" class="block mt-1 w-full" type="password" name="password" placeholder="*******" required
                          autocomplete="current-password"/>
            </div>
            <div class="mb-3">
                <label for="remember_me" class="inline-flex items-center">
                    <x-inputs id="remember_me" type="checkbox"
                           name="remember">
                    </x-inputs>
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="mb-3">
                <button type="submit" class="w-full text-rose-500 bg-yellow-200 rounded-lg">
                    {{ __('Log in') }}
                </button>
            </div>
            <div class="mb-3">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>
