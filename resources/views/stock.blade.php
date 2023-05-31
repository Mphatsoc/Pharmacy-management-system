<x-app-layout>
<x-slot name="header">
        <div class="flex justify-between items-center mb-4">
        {{--             
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('/admin/dashboard')" :active="request()->routeIs('/admin/dashboard')">
                    {{ __('Home') }}
                </x-nav-link>
            </div> --}}
        
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

    <div class="py-12 bg-gray-300">
        <!-- Cards showing different meds -->
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($medicines as $medicine)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('stock.add', ['id' => $medicine->id]) }}"><div class="p-6 text-gray-900 dark:text-gray-100">
                       <h3  class="text-lg font-medium mb-2">{{ $medicine->medicine_name }}</h3>
                        <p>{{ $medicine->quantity_on_hand}}</p>
                    </div></a>
                </div>
                @endforeach
         </div>
    </div>
    
 </div>
 </x-app-layout>


