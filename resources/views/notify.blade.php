<!-- resources/views/notifications.blade.php -->

<x-app-layout>
    <x-slot name="header">
    <div class="flex justify-between items-center mb-4">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notifications') }}

        </h2>
         <!-- Links in the navigation bar to Stock,Notifications and About -->
        <a href="/riv" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition duration-150 ease-in-out">
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">{{ __("You have a new notification!") }}</p>

                    <p class="mb-4">{{ __("Your request was Approved!!!!!") }}</p>

                    <!-- <div class="flex justify-between">
                        <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                            {{ __("Approve") }}
                        </button>

                        <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                            {{ __("Decline") }}
                        </button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
