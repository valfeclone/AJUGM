<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Nama Tim') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Kategori') }}" />
                <x-jet-input class="block mt-1 w-full" list="kategori-kategori" name="kategori_lomba" :value="old('kategori_lomba')" required />
                <datalist id="kategori-kategori">
                    <option value="Arjuna">
                    <option value="Kresna">
                    <option value="Prahasta">
                    <option value="Nakula">
                    <option value="Sadewa">
                </datalist>
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Lomba') }}" />
                <x-jet-input class="block mt-1 w-full" list="lomba-lomba" name="lomba" :value="old('lomba')" required />
                <datalist id="lomba-lomba">
                    <option value="Homeless Media">
                    <option value="Comic Strip">
                    <option value="Podcast">
                    <option value="Film Fiksi">
                    <option value="Movie Scoring">
                    <option value="Film Dokumenter">
                    <option value="Penulisan Naskah">
                    <option value="PR Campaign">
                    <option value="Press Conference">
                    <option value="Risk Management">
                    <option value="Riset Strategis Akademik">
                    <option value="Fun Research">
                    <option value="Social Media Activation">
                    <option value="Unconventional Media">
                    <option value="Brandbook">
                    <option value="Skip Ad">
                </datalist>
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

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
