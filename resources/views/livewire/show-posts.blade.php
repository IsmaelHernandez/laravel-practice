{{-- vista de componente --}}
{{-- siempre debe de ir dentro de un div padre --}}
<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{$search}}
    {{-- <h1>{{$titulo}}</h1> --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- component -->

    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
                <x-table>
                    <div class="px-6 py-4">
                        {{-- <input type="text" wire:model="search"> --}}
                        <x-jet-input class="w-full" type="text" wire:model="search" placeholder="Buscar"/>
                    </div>
                    @if ($posts->count())
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="cursor-pointer font-semibold text-left" wire:click="order('id')">ID</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="cursor-pointer font-semibold text-left" wire:click="order('title')">Titulo</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="cursor-pointer font-semibold text-left" wire:click="order('content')">Contenido</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Fecha</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Fecha Fin</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @foreach($posts as $post)
                                <tr>
                                    <td class="p-2">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-800">{{$post->id}}</div>
                                        </div>
                                    </td>
                                    <td class="p-2 py-4">
                                        <div class="text-left">{{$post->title}}</div>
                                    </td>
                                    <td class="p-2 py-4">
                                        <div class="text-left font-medium text-green-500">{{$post->content}}</div>
                                    </td>
                                    <td class="p-2 py-4">
                                        <div class="text-left font-medium">{{$post->created_at}}</div>
                                    </td>
                                    <td class="p-2 py-4">
                                        <div class="text-left font-medium">{{$post->updated_at}}</div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    @else
                        <div class="px-6 py-4">
                            No existe registro
                        </div>
                    @endif
                </x-table>   
    
    </div

</div>
