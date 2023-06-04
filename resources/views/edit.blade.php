<x-app-layout>

    <x-slot name="header">
    <div class="flex justify-between items-center mb-4">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Home') }}
            </x-nav-link>
        </div>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update RIV') }}
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
    <form method="POST" action="/edit">

             @csrf
             @method('PUT')
             <input type="hidden" id="id" name="id" value="{{$riv['id']}}" required class="bg-gray-100 text-gray-900 rounded-lg p-2">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 text-gray-900 dark:text-gray-100">
                <label for="item_description" class="text-lg font-medium mb-2">Item Description:</label>
                 <input type="text" id="item_description" name="item_description" value="{{$riv['item_description']}}" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
               </div>
            </div>

  <br><br>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
               <label for="strength" class="text-lg font-medium mb-2">Strength:</label>
                <input type="text" id="strength" name="strength" value="{{$riv['strength']}}" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
              </div>
            </div>


  <br><br>
             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
               <label for="stock_balance" class="text-lg font-medium mb-2">Stock Balance:</label>
                 <input type="number" id="stock_balance" name="stock_balance" value="{{$riv['stock_balance']}}" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
              </div>
            </div>
  <br><br>
             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
               <label for="quantity_requested" class="text-lg font-medium mb-2">Quantity Being Requested:</label>
                 <input type="number" id="quantity_requested" name="quantity_requested" value="{{$riv['quantity_requested']}}" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
              </div>
            </div>
 <br><br>
             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
               <label for="quantity_issued_by_pharmacy" class="text-lg font-medium mb-2">Quantity Issued By Pharmacy:</label>
                <input type="number" id="quantity_issued_by_pharmacy" name="quantity_issued_by_pharmacy" value="{{$riv['quantity_issued_by_pharmacy']}}" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
              </div>
            </div>

  <br><br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
               <label for="quantity_collected_from_pharmacy" class="text-lg font-medium mb-2">Quantity Collected From Pharmacy:</label>
                <input type="number" id="quantity_collected_from_pharmacy" name="quantity_collected_from_pharmacy" value="{{$riv['quantity_collected_from_pharmacy']}}" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
              </div>
            </div>
            <div class="flex justify-between">
                        <a href="/riv-list"><div class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-green-600">
                            {{ __("Update") }}
</div></a>

  </div>
</form>

    </x-app-layout>