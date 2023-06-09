<x-guest-layout class="bg-green-100">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div style="max-width: 28rem; margin-left: auto; margin-right: auto; margin-top: 2rem; margin-bottom: 2rem;">
    <a style="color: #9b7cd6; font-weight: bold; font-family: 'Lato', sans-serif; font-size: 34px;">
                              Pharmacy
                            </a>
        <form method="POST" action="{{ route('login') }}" style="background-color: white; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); border-radius: 0.375rem; padding-left: 1rem; padding-right: 1rem; padding-top: 1.5rem; padding-bottom: 2rem; margin-bottom: 1rem;">

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

                <div>
                    <x-primary-button  style="background-color: #9b7cd6;">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
               
                
               
            </div>
        </form>
    </div>
</x-guest-layout>



