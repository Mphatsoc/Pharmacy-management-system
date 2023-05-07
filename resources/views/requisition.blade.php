<x-app-layout>


    <x-slot name="header">
    <div class="flex justify-between items-center mb-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('RIV') }}
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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

           <form method="POST" action="riv">

             @csrf

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 text-gray-900 dark:text-gray-100">
                <label for="item_description" class="text-lg font-medium mb-2">Item Description:</label>
                 <input type="text" id="item_description" name="item_description" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
               </div>
            </div>

  <br><br>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
               <label for="strength" class="text-lg font-medium mb-2">Strength:</label>
                <input type="text" id="strength" name="strength" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
              </div>
            </div>


  <br><br>
             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
               <label for="stock_balance" class="text-lg font-medium mb-2">Stock Balance:</label>
                 <input type="number" id="stock_balance" name="stock_balance" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
              </div>
            </div>
  <br><br>
             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
               <label for="quantity_requested" class="text-lg font-medium mb-2">Quantity Being Requested:</label>
                 <input type="number" id="quantity_requested" name="quantity_requested" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
              </div>
            </div>
 <br><br>
             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
               <label for="quantity_issued_by_pharmacy" class="text-lg font-medium mb-2">Quantity Issued By Pharmacy:</label>
                <input type="number" id="quantity_issued_by_pharmacy" name="quantity_issued_by_pharmacy" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
              </div>
            </div>

  <br><br>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
               <label for="quantity_collected_from_pharmacy" class="text-lg font-medium mb-2">Quantity Collected From Pharmacy:</label>
                <input type="number" id="quantity_collected_from_pharmacy" name="quantity_collected_from_pharmacy" required class="bg-gray-100 text-gray-900 rounded-lg p-2">
              </div>
            </div>
<br><br>
  <div class="col-span-3">
  <button type="submit" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Send</button>
  </div>
</form>
</div>
</div>
</x-app-layout>