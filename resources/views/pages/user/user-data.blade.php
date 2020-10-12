<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Tim') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Tim</a></div>
            <div class="breadcrumb-item"><a href="{{ route('user') }}">Data Tim</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="user" :model="$user" />
    </div>
</x-app-layout>
<!-- INI BUAT NAVBAR YANG KIRI DLAN -->