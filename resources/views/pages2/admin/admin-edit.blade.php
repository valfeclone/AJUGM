<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Admin') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Admin</a></div>
            <div class="breadcrumb-item"><a href="{{ route('admin') }}">Edit Admin</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-admin action="updateAdmin" :adminId="request()->adminId" />
    </div>
</x-app-layout>
