<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Admin Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Admin</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin') }}">Buat Admin Baru</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-admin action="createAdmin" />
    </div>
</x-app-layout>
