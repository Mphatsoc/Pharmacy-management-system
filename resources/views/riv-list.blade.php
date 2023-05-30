<x-app-layout>

    <x-slot name="header">
    <div class="flex justify-between items-center mb-4">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Home') }}
            </x-nav-link>
        </div>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Requisition List') }}
        </h2>
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

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Item Description
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Strength
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Stock Balance
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quantity Requested
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quantity Issued By Pharmacy
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Quantity Collected From Pharmacy
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Operation
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Operation
                                </th>
                               

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($rivs as $riv)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $riv->item_description }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $riv->strength }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $riv->stock_balance }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $riv->quantity_requested }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $riv->quantity_issued_by_pharmacy }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $riv->quantity_collected_from_pharmacy }}
                                    </td>
                                    <td class="px-4 py-2">
                                     <a href="{{ route('remove', ['id' => $riv->id]) }}" 
                                      class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                       Delete</a>
                                    </td>
                                    <td class="px-4 py-2">
                                     <a href="" 
                                      class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                       Send</a>
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
