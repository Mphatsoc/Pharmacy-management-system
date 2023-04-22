<x-app-layout>
<x-slot name="header">
        <div class="flex justify-between items-center mb-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Stock card') }}
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
            <form method="POST" action="{{ route('inventory.store') }}" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @csrf
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <label for="date" class="text-lg font-medium mb-2">Date</label>
        <input type="date" name="date" id="date" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
    </div>
</div>
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <label for="quantity_received" class="text-lg font-medium mb-2">Quantity Received</label>
        <input type="number" name="quantity_received" id="quantity_received" min="0" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
    </div>
</div>
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <label for="quantity_issued" class="text-lg font-medium mb-2">Quantity Issued</label>
        <input type="number" name="quantity_issued" id="quantity_issued" min="0" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
    </div>
</div>
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <label for="quantity_on_hand" class="text-lg font-medium mb-2">Quantity on Hand</label>
        <input type="number" name="quantity_on_hand" id="quantity_on_hand" min="0" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
    </div>
</div>
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <label for="losses" class="text-lg font-medium mb-2">Losses</label>
        <input type="number" name="losses" id="losses" min="0" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
    </div>
</div>

                <div class="col-span-3">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>