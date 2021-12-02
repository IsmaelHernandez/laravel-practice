<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- para llamar a un componente en la vista --}}
            {{-- se usa livewire y nombre de componente en minisculas y con guiones --}}
            @livewire('show-posts', ['title' => 'Estes es un titulo de prueba'])
        </div>
    </div>
</x-app-layout>
