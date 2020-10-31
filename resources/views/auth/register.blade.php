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
                <x-jet-label value="{{ __('Asal Universitas') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="universitas" :value="old('universitas')" required autofocus autocomplete="universitas" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Kategori') }}" />
                <x-jet-input class="block mt-1 w-full" type="enum" list="kategori-kategori" name="kategori_lomba" :value="old('kategori_lomba')" required />
                <datalist id="kategori-kategori">
                    <option name="Arjuna" value="Arjuna">
                    <option name="Kresna" value="Kresna">
                    <option name="Prahasta" value="Prahasta">
                    <option name="Nakula" value="Nakula">
                    <option name="Sadewa" value="Sadewa">
                </datalist>
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Lomba') }}" />
                <x-jet-input class="block mt-1 w-full" list="lomba-lomba" name="lomba" :value="old('lomba')" required />
                <datalist id="lomba-lomba">
                    <option name="Homeless Media" value="Homeless Media">
                    <option name="Podcast" value="Comic Strip">
                    <option name="Podcast" value="Podcast">
                    <option name="Film Fiksi" value="Film Fiksi">
                    <option name="Movie Scoring" value="Movie Scoring">
                    <option name="Film Dokumenter" value="Film Dokumenter">
                    <option name="Penulisan Naskah" value="Penulisan Naskah">
                    <option name="PR Campaign" value="PR Campaign">
                    <option name="Press Conference" value="Press Conference">
                    <option name="Risk Management" value="Risk Management">
                    <option name="Riset Strategis Akademik" value="Riset Strategis Akademik">
                    <option name="Fun Research" value="Fun Research">
                    <option name="Social Media Activation" value="Social Media Activation">
                    <option name="Unconventional Media" value="Unconventional Media">
                    <option name="Brandbook" value="Brandbook">
                    <option name="Skip Ad" value="Skip Ad">
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