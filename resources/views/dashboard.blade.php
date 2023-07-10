<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <div class="p-4 bg-gray-100 rounded-lg shadow">
                        <h3 class="text-lg font-bold mb-2">Mahasiswa</h3>
                        <h2><p class="text-sm text-gray-600">{{ $mahasiswa }}</p></h2>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-black stretched-link" href="{{ url('mahasiswa') }}">View Details</a>
                            <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="p-4 bg-gray-100 rounded-lg shadow">
                    <h3 class="text-lg font-bold mb-2">Dosen</h3>
                    <h2><p class="text-sm text-gray-600">{{ $dosen  }}</p></h2>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-black stretched-link" href="{{ url('dosen') }}">View Details</a>
                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="p-4 bg-gray-100 rounded-lg shadow">
                    <h3 class="text-lg font-bold mb-2">Makul</h3>
                    <h2><p class="text-sm text-gray-600">{{ $makul  }}</p></h2>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-black stretched-link" href="{{ url('makul') }}">View Details</a>
                        <div class="small text-black"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
