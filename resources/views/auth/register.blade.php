<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="username" value="{{ __('Username') }}" />
                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div>
                <x-jet-label for="age" value="{{ __('Age') }}" />
                <x-jet-input id="age" class="block mt-1 w-full" type="number" name="age" :value="old('age')" required autofocus autocomplete="age" />
            </div>

            <div>
                <x-jet-label for="country" value="{{ __('Country') }}" />
                <x-jet-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus autocomplete="country" />
            </div>

            <div>
                <x-jet-label for="location" value="{{ __('Location') }}" />
                <x-jet-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" autofocus autocomplete="location" />
            </div>
        
            <div>
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" autofocus autocomplete="address" />
            </div>

            <div>
                <x-jet-label for="cp" value="{{ __('Cp') }}" />
                <x-jet-input id="cp" class="block mt-1 w-full" type="number" name="cp" :value="old('cp')" autofocus autocomplete="cp" />
            </div>

            <div>
                <x-jet-label for="bio" value="{{ __('Bio') }}" />
                <x-jet-input id="bio" class="block mt-1 w-full" type="textarea" name="bio" :value="old('bio')" autofocus autocomplete="bio" />
            </div>

            <div>
                <x-jet-label for="preferences" value="{{ __('preferences') }}" />
                <x-jet-input id="preferences" class="block mt-1 w-full" type="text" name="preferences" :value="old('preferences')" autofocus autocomplete="preferences" />
            </div>
            
            <div>
                <x-jet-input id="icon" class="block mt-1 w-full" type="hidden" name="icon" :value=1 autofocus autocomplete="icon" />
            </div>

            <div>
                <x-jet-input id="banner" class="block mt-1 w-full" type="hidden" name="banner" :value=1 autofocus autocomplete="banner" />
            </div>

            <div>
                <x-jet-input id="iconousado" class="block mt-1 w-full" type="hidden" name="iconousado" :value=1 autofocus autocomplete="iconousado" />
            </div>

            <div>
                <x-jet-input id="bannerusado" class="block mt-1 w-full" type="hidden" name="bannerusado" :value=1 autofocus autocomplete="bannerusado" />
            </div>

            <div>
                <x-jet-input id="type" class="block mt-1 w-full" type="hidden" name="type" :value=1 required autofocus autocomplete="type" />
            </div>

            <div>
                <x-jet-input id="games" class="block mt-1 w-full" type="hidden" name="games" :value="'juego'" required autofocus autocomplete="games" />
            </div>
           

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
