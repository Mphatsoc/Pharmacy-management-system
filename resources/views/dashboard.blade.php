<x-app-layout>


    <x-slot name="header">
    

        <div class="flex justify-between items-center mb-4">
        <button onclick="window.history.back();" class="font-bold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition duration-150 ease-in-out">
        Back
    </button>
    <br>
    <br>

            <!-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('User') }}
            </h2> -->
            <!-- Links in the navigation bar to RIV and Notifications -->
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

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
                <!-- Cards  -->
            <a href="/riv"> <div  style = "background-color: lightgreen;"class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> 
              <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3  class="text-lg font-medium mb-2">RIV</h3>
                        <p>Send RIVs.</p>
                    </div>
                </div></a>
                <a href="/notify"><div style="background-color: lightblue;"class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-medium mb-2">Notifications</h3>
                        <p>Check Approved/Declined RIVs.</p>
                    </div>
                </div></a>
           </div>
        </div>
    </div>
</x-app-layout>
