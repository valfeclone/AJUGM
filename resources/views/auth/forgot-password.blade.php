<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="/images/ajisaka-logo.png" alt="" class="logo">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            <p style="text-align: justify;">Jika lupa dengan passwordmu, tenang saja. Tulis di kolom dibawah email team mu, dan kita akan mengirimkan email berisikan link reset password untuk mengubah passwordmu</p>
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
