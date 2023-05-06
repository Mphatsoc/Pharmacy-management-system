
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center mb-4">
        <div class="flex items-center mb-4">
    <a href="{{ url()->previous() }}" class="mr-2">
        <img src="{{ asset('images/arrow.png') }}" alt="Back" width="30">
    </a>
</div>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <!-- Links in the navigation bar to Stock,Notifications and About -->
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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Cards  -->
            <a href="/stock"> <div style="background-color:lightgreen;"class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> 
              <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3  class="text-lg font-medium mb-2">STOCK</h3>
                        <p>Manage Medicine stock.</p>
                    </div>
                </div></a>
                <a href="/notifications"><div style="background-color:lightblue; class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-medium mb-2">Notifications</h3>
                        <p>Approve/Decline RIVs.</p>
                    </div>
                </div></a>
                <a href="/report"><div style="background-color: lightgreen;" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-medium mb-2">Reports</h3>
                        <p>Monthly Medicine Reports.</p>
                    </div>
                </div></a>
           </div>
        </div>
    </div>
</x-app-layout>
