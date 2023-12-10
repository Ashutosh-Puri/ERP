@extends('layouts.guest.guest')
@section('guest')
  <div x-data="setup()" x-init="$refs.loading.classList.add('hidden'); setColors(color);" :class="{ 'dark': isDark }">
    <!-- Loading screen -->
    <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-primary-darker">
      Loading.....
    </div>
    <main aria-labelledby="pageTitle" class="flex items-center justify-center h-screen bg-gray-100 dark:bg-dark dark:text-light">
      <div class="p-4 space-y-4">
        <div class="flex flex-col items-start space-y-3 sm:flex-row sm:space-y-0 sm:items-center sm:space-x-3">
          <p class="font-semibold text-danger-light text-9xl dark:text-danger">500</p>
          <div class="space-y-2">
            <h1 id="pageTitle" class="flex items-center space-x-2">
              <svg aria-hidden="true" class="w-6 h-6 text-danger-light dark:text-danger"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
              </svg>
              <span class="text-xl font-medium text-gray-600 sm:text-2xl dark:text-light">
                Oops! Something went wrong.
              </span>
            </h1>
          </div>
        </div>
      </div>
    </main>
  </div>
@endsection
