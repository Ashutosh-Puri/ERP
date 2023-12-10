@extends('layouts.app')
@section('main')
    <div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);" :class="{ 'dark': isDark }">
        <div class="flex h-screen antialiased text-gray-900 bg-gray-100 dark:bg-dark dark:text-light">
            <!-- Loading screen -->
            {{-- <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker">
                Loading.....
            </div> --}}

            <div class="flex-1 h-full overflow-x-hidden overflow-y-auto">

                @livewire('layouts.guest.navbar')

                <!-- Main content -->
                <main>
                    @yield('guest')
                </main>
            </div>
            @livewire('layouts.student.setting-panel')
        </div>
    </div>
@endsection
