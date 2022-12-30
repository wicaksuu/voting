<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('admin')
            </div>
        </div>
    </div>
    <div class="pt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="min-w-full text-center">
                                    <thead class="border-b bg-gray-800">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                No
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Nama Peserta
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Kategori
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Status
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Point
                                            </th>
                                        </tr>
                                    </thead class="border-b">
                                    <tbody>
                                        <div wire:poll>
                                            @livewire('tabel-peserta')
                                        </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>