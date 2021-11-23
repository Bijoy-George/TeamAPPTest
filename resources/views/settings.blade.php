<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="/settings">
            @csrf
@if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <div>
                <x-jet-label for="mathes_played" value="{{ __('Mathches Played') }}" />
                <x-jet-input id="mathes_played" class="block mt-1 w-full" type="text" name="mathes_played" :value="old('name')" required autofocus autocomplete="mathes_played" />
            </div>

            <div class="mt-4">
                <x-jet-label for="mathes_won" value="{{ __('Matches Won') }}" />
                <x-jet-input id="mathes_won" class="block mt-1 w-full" type="text" name="mathes_won" :value="old('mathes_won')" required />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Save') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
