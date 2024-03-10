<x-guest-layout>
    <!-- Session Status -->
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">--}}
{{--                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ml-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--    <a href="{{ route('register') }}" class="text-white">Not a Member?</a>--}}
    <main class="auth-page">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                    <div class="mdc-card">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                        <div class="mdc-text-field w-100">
                                            <x-text-input class="mdc-text-field__input"  style="background: white"  id="text-field-hero-input" type="email" name="email" :value="old('email')" required autofocus /><br>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            <div class="mdc-line-ripple"></div>
                                            <x-input-label for="text-field-hero-input" class="mdc-floating-label" :value="__('Email')" />
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                        <div class="mdc-text-field w-100">
                                            <x-text-input class="mdc-text-field__input" style="background: white" type="password" id="text-field-hero-input" name="password" required autocomplete="current-password" />
                                            <div class="mdc-line-ripple"></div>
                                            <x-input-label for="text-field-hero-input" class="mdc-floating-label" :value="__('Password')" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                            <!-- Remember Me -->
{{--                                            <div class="block mt-4">--}}
{{--                                                <label for="remember_me" class="inline-flex items-center">--}}
{{--                                                    <input id="remember_me" type="checkbox" class="rounded :bg-gray-900 border-gray-300  text-indigo-600 shadow-sm focus:ring-indigo-500 white:focus:ring-indigo-600 white:focus:ring-offset-gray-800"  name="remember">--}}
{{--                                                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                    --}}
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                        <div class="mdc-form-field">
                                            <div class="mdc-checkbox">
                                                <input type="checkbox"
                                                       class="mdc-checkbox__native-control"
                                                       id="checkbox-1"  name="remember"/>
                                                <div class="mdc-checkbox__background">
                                                    <svg class="mdc-checkbox__checkmark"
                                                         viewBox="0 0 24 24">
                                                        <path class="mdc-checkbox__checkmark-path"
                                                              fill="none"
                                                              d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                                    </svg>
                                                    <div class="mdc-checkbox__mixedmark"></div>
                                                </div>
                                            </div>
                                            <label for="checkbox-1">{{ __('Remember me') }}</label>
                                        </div>
                                    </div>
                                    @if (Route::has('password.request'))
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop d-flex align-items-center justify-content-end">

                                        <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                    </div>
                                    @endif
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                        <button class="mdc-button mdc-button--raised w-100">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-right">
                         <span class="text-muted">Not a member?</span>
                            <a href="{{ route('register') }}" class=" text-red"> Register</a>
                        </div>
                    </div>
                </div>
                <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
            </div>
        </div>

    </main>
</x-guest-layout>
