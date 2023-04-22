<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center mb-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Final Report') }}
            </h2>
            <a href="/stock" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition duration-150 ease-in-out">
                Stock
            </a>
            <a href="/notifications" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition duration-150 ease-in-out">
                Notifications
            </a>
            <a href="/about" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition duration-150 ease-in-out">
                About
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="text-2xl font-medium text-gray-800 dark:text-gray-200 mb-4">Monthly Report</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-medium mb-2">Injectables</h3>
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left">Medicine Name</th>
                                    <th class="px-4 py-2 text-left">Starting Amount</th>
                                    <th class="px-4 py-2 text-left">Closing Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">Albendazol</td>
                                    <td class="border px-4 py-2">100</td>
                                    <td class="border px-4 py-2">80</td>
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">LA</td>
                                    <td class="border px-4 py-2">50</td>
                                    <td class="border px-4 py-2">40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-medium mb-2">Syrups</h3>
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left">Medicine Name</th>
                                    <th class="px-4 py-2 text-left">Starting Amount</th>
                                    <th class="px-4 py-2 text-left">Closing Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">Ampicilin</td>
                                    <td class="border px-4 py-2">300</td>
                                    <td class="border px-4 py-2">40</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-medium mb-2">Tablets</h3>
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left">Medicine Name</th>
                                    <th class="px-4 py-2 text-left">Starting Amount</th>
                                    <th class="px-4 py-2 text-left">Closing Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border px-4 py-2">Panadol</td>
                                    <td class="border px-4 py-2">170</td>
                                    <td class="border px-4 py-2">60</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</x-app-layout>    
    

