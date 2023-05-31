<div class="w-full max-w-xl m-auto">
    <div class="bg-white rounded-lg shadow p-4">

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="text-center text-rose-500 text-4xl font-bold mb-12 tracking-widest	uppercase">Register</h1>

            <div class="mb-3">
                <x-inputs.label for="name" :value="__('Name')"/>
                <x-inputs id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                          autofocus/>
            </div>

            <div class="mb-3">
                <x-inputs.label for="email" :value="__('Email')"/>
                <x-inputs id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                          autofocus/>
            </div>

            <div class="mb-3">
                <x-inputs.label for="password" :value="__('Password')"/>
                <x-inputs id="password" class="block mt-1 w-full" type="password" name="password" placeholder="*******"
                          required
                          autocomplete="current-password"/>
            </div>

            <div class="mb-3">
                <x-inputs.label for="password_confirmation" :value="__('Confirm Password')"/>
                <x-inputs id="password_confirmation" class="block mt-1 w-full" type="password"
                          name="password_confirmation" placeholder="*******" required
                          autocomplete="current-password"/>
            </div>

            <div class="mb-3">
                <button type="submit" class="w-full text-rose-500 bg-yellow-200 rounded-lg">
                    {{ __('Register') }}
                </button>
            </div>
        </form>

    </div>
</div>
