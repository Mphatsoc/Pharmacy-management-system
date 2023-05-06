<x-app-layout>
<x-slot name="header">
        <div class="flex justify-between items-center mb-4">
        
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Stock') }}
            </h2>
            <a href="/" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition duration-150 ease-in-out">
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
        <!-- Cards showing different meds -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/add"><div class="p-6 text-gray-900 dark:text-gray-100">
                       <h3  class="text-lg font-medium mb-2">Albendazol</h3>
                        <p>Quantity: 100</p>
                    </div></a>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/add"><div class="p-6 text-gray-900 dark:text-gray-100">
                   <h3 class="text-lg font-medium mb-2">Ampicilin</h3>
                        <p>Quantity: 50</p>
                    </div></a>
                </div>
                <div  class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="/add"><h3 class="text-lg font-medium mb-2">La</h3>
                        <p>Quantity: 80</p>
                    </div></a>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="/add"><div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-medium mb-2">Panadol</h3>
                        <p>Quantity: 120</p>
                    </div></a>
                </div>
              </div>
         </div>
    </div>
 </div>
 </x-app-layout>


