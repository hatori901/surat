@section('title','Dashboard')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-3 sm:grid-cols-3 m-8">
                    <div class="flex flex-col justify-center px-8 py-4 bg-white border border-gray-300 rounded">
                        <div>
                            <p class="text-3xl font-semibold text-center text-gray-800">{{ $count_users }}</p>
                            <p class="text-lg text-center text-gray-500">Siswa</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center px-8 py-4 bg-white border border-gray-300 rounded">
                        <div>
                            <p class="text-3xl font-semibold text-center text-gray-800">{{ $count_not_in }}</p>
                            <p class="text-lg text-center text-gray-500">Siswa Tidak Masuk</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                        <div>
                            <p class="text-3xl font-semibold text-center text-gray-800">{{ $count_surat }}</p>
                            <p class="text-lg text-center text-gray-500">Surat Izin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
