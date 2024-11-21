<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            LivewireTest
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (session()->has('message'))
                    <p class="bg-sky-100 p-4 rounded">{{ session('message') }}</p>
                @endif
                <livewire:counter />
            </div>
        </div>
    </div>
</x-app-layout>
