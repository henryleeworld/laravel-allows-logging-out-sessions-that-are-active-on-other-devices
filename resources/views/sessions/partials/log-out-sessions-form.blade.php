<section>
    <header></header>
    <form method="POST" action="{{ route('sessions.destroy') }}">
        @csrf
        @method('DELETE')
        <div>
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" placeholder="{{ __('Enter password') }}" required autocomplete="password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
            <div class="mt-6">
                <x-primary-button>
                    {{ __('Log Out Other Browser Sessions') }}
                </x-primary-button>

                @if (session('status') === 'sessions-logged-out')
                    <p
                        x-data="{ show: true }"
                        x-show="show"
                        x-transition
                        x-init="setTimeout(() => show = false, 2000)"
                        class="text-sm text-gray-600 dark:text-gray-400"
                    >{{ __('Logged out of other browser sessions.') }}</p>
                @endif
            </div>
        </div>
    </form>
</section>
