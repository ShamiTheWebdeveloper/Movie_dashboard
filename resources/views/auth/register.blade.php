<x-guest-layout>
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}
{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ml-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
    <main class="auth-page">
        <div class="mdc-layout-grid">
            <div class="mdc-layout-grid__inner">
                <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
                <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                    <div class="mdc-card">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mdc-layout-grid">
                                <div class="mdc-layout-grid__inner">
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                        <div class="mdc-text-field w-100">
                                            <x-text-input class="mdc-text-field__input"  style="background: white"  id="text-field-hero-input" type="text" name="name" :value="old('name')" required autofocus /><br>
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            <div class="mdc-line-ripple"></div>
                                            <x-input-label for="text-field-hero-input" class="mdc-floating-label" :value="__('Name')" />
                                        </div>
                                    </div>
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
                                            <x-text-input class="mdc-text-field__input" style="background: white" type="password" id="text-field-hero-input" name="password" required autocomplete="new-password" />
                                            <div class="mdc-line-ripple"></div>
                                            <x-input-label for="text-field-hero-input" class="mdc-floating-label" :value="__('Password')" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                        <div class="mdc-text-field w-100">
                                            <x-text-input class="mdc-text-field__input" style="background: white" type="password" id="text-field-hero-input" name="password_confirmation" required autocomplete="current-password" />
                                            <div class="mdc-line-ripple"></div>
                                            <x-input-label for="text-field-hero-input" class="mdc-floating-label" :value="__('Confirm Password')" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                        <button class="mdc-button mdc-button--raised w-100">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-right">
                            <span class="text-muted">Already registered?</span>
                            <a href="{{ route('login') }}" class=" text-red"> Login</a>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet"></div>
            </div>
        </div>

    </main>
</x-guest-layout>
