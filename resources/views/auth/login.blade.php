<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" onsubmit="encryptPasswordsforLoginForm();">
        @csrf
        <!-- Email Address -->
        <div class="flex items-center justify-center">
            <img src="/logo.png" class="w-14" alt="">
        </div>
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="flex mt-4">
            <div id="captcha-container">
                {!! captcha_img('math') !!}
            </div>
            <button type="button" class="ml-6" onclick="refreshCaptcha()">
                <x-logos.refresh-logo />
            </button>
        </div>
        <input id="captcha" type="text"
            class="block w-full mt-4 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            placeholder="Enter Captcha" name="captcha">
        @error('captcha')
        <div class="text-red-500 text-sm mt-1 px-1">{{$message}}</div>
        @enderror

        <div class="flex justify-between">
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
            @if (Route::has('password.request'))
            <a class="mt-4 underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>

        <div class="flex w-full mt-4">
            <button type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Sign in
            </button>
        </div>
        <div class="text-sm pt-3 text-center">
            <p>Not member yet? <a href="{{url('/register')}}"
                    class="text-blue-500 font-semibold hover:cursor-pointer">Register here</a
                    href="{{url('/register')}}"></p>
        </div>
    </form>
    <script>
        function refreshCaptcha() {
            fetch("{{ route('refresh-captcha') }}")
                .then(response => response.text())
                .then(data => {
                    document.getElementById('captcha-container').innerHTML = data;
                });
        }
        function encryptPasswordsforLoginForm() {
            encryptPasswords(
                document.getElementById('password'),
            );
        }
    </script>
</x-guest-layout>