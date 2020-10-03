<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Admin') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Admin</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin') }}">Data Admin</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="admin" :model="$admin" />
    </div>
</x-app-layout>
