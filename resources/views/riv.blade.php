<x-app-layout>


    <x-slot name="header">
    <div class="flex justify-between items-center mb-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('RIV') }}
            </h2>
            <a href="/add" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition duration-150 ease-in-out">
                RIV
            </a>
            <a href="/notify" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition duration-150 ease-in-out">
                Notifications
            </a>
            <a href="/user" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition duration-150 ease-in-out">
                About
            </a>
        </div>
    </x-slot>
</x-app-layout>