<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" onsubmit="encryptPasswordsforLoginForm();">
        @csrf
        <div class="flex items-center justify-center">
            <img src="/logo.png" class="w-14" alt="">
        </div>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <div class="mt-6">
            <span class="block rounded-md bg-blue-500 shadow-sm">
                <button type="submit"
                    class="w-full py-2 border border-transparent text-sm font-medium rounded-md text-white hover:bg-blue-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                    Register
                </button>
            </span>
        </div>
        <div class="text-sm pt-3 text-center">
            <p>Already registered? 
                <a href="{{ route('login') }}" class="text-blue-500 font-semibold hover:cursor-pointer">Login now</a>
            </p>
        </div>
    </form>
    <script>
        function encryptPasswordsforLoginForm() {
            encryptPasswords(
                document.getElementById('password'),
            );
        }
    </script>
</x-guest-layout>