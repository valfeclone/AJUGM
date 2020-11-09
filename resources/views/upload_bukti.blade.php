<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="block mt-4">
            <x-jet-label value="{{ __('UPLOAD BUKTI PEMBAYARAN') }}" />
        </div>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="/uploadbukti" enctype="multipart/form-data">
            @csrf

            <div>
                <x-jet-label value="{{ __('File Bukti Pembayaran') }}" />
                <x-jet-input class="block mt-1 w-full" type="file" name="file_bukti_pembayaran" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Upload Bukti Pembayaran') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>