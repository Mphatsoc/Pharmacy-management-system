<x-app-layout>

    <x-slot name="header">
    <div class="flex justify-between items-center mb-4">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Quantity List') }}
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

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quantity Received
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quantity Issued
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quantity On Hand
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Losses
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Operation
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <div class="flex justify-between">
                                <a href="/add"><div class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-green-600">
                                  {{ __("Add More data") }}
                                </div></a>

                               </div>
                               </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($quantities as $quantity)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $quantity->date }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $quantity->quantity_recieved }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $quantity->quantity_issued }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $quantity->quantity_on_hand }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $quantity->losses }}
                                    </td>
                                    <td class="px-4 py-2">
                                     <a href="{{ route('delete', ['id' => $quantity->id]) }}" 
                                      class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                       Delete</a>
                                    </td>
                                </tr>        
                            @endforeach
                        </tbody>
                    </table>
             
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
