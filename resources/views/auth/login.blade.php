{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="bg-white-400 shadow-lg rounded px-8 pt-6 pb-8 mb-4">

        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-xs italic" />
        </div>

        <!-- Password -->
        <div class="mb-6">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-xs italic" />
        </div>

        <!-- Remember Me -->
        <div class="mb-6">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-green-500 focus:outline-none focus:shadow-outline-blue" name="remember">
                <span class="ml-2 text-gray-700">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between">
            <div>
                @if (Route::has('password.request'))
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <div>
                <x-primary-button class="ml-3 bg-white-700">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout> --}}

{-- <x-guest-layout class="bg-green-100">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class= "max-w-md mx-auto my-8">
        <form method="POST" action="{{ route('login') }}" class="bg-white-400 shadow-lg rounded px-8 pt-6 pb-8 mb-4">

            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-xs italic" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-xs italic" />
            </div>

            <!-- Remember Me -->
            <div class="mb-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-green-500 focus:outline-none focus:shadow-outline-blue" name="remember">
                    <span class="ml-2 text-gray-700">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <div>
                    @if (Route::has('password.request'))
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div>
                    <x-primary-button class="ml-3 bg-white-700">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout> --}
{{-- 
<x-guest-layout class="bg-green-100"
>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="max-w-md mx-auto my-8">
        <form method="POST" action="{{ route('login') }}" class="bg-white-500 shadow-lg rounded px-8 pt-6 pb-8 mb-4">

            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-xs italic" />
            </div>

            <!-- Password -->
            <div class="mb-6">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-blue"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-xs italic" />
            </div>

            <!-- Remember Me -->
            <div class="mb-6">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-green-500 focus:outline-none focus:shadow-outline-blue" name="remember">
                    <span class="ml-2 text-gray-700">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-between">
                <div>
                    @if (Route::has('password.request'))
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div>
                    <x-primary-button class="ml-3 bg-white-700">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout> --}}



