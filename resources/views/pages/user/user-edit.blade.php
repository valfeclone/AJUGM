<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Tim') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Tim</a></div>
            <div class="breadcrumb-item"><a href="{{ route('user') }}">Edit Tim</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-user action="updateUser" :userId="request()->userId" />
    </div>
</x-app-layout>
