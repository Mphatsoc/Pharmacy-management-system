<x-app-layout>


    <x-slot name="header">
    <div class="flex justify-between items-center mb-4">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
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
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
                <!-- Cards  -->
<<<<<<< HEAD
            <!-- <a href="/riv"> <div  style = "background-color: lightgreen;"class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> 
=======

                
            <a href="/riv"> <div  style = "background-color: lightgreen;"class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg"> 
>>>>>>> 0bc469f1fdd3ca17bced25bc9d8fc0eacd9b9b7a
              <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3  class="text-lg font-medium mb-2">Requisition Issue Voucher</h3>
                        <p>Send RIVs.</p>
                    </div>
<<<<<<< HEAD
                </div></a> -->
                <div style="background-color: lightgreen;" class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
  <div class="p-6 text-gray-900 dark:text-gray-100">
    <h3 class="text-lg font-medium mb-2">Requisition Issue Voucher</h3>
    <form>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="department">
          Hospital Department:
        </label>
        <select id="department" name="department" class="form-select block w-full mt-1">
          <option value="">Select a department</option>
          <option value="cardiology">Cardiology</option>
          <option value="neurology">Neurology</option>
          <option value="oncology">Oncology</option>
          <!-- Add more options for other departments as needed -->
        </select>
      </div>
      <div class="mb-4">
        <label class="block text-gray-700 font-bold mb-2" for="message">
          Message:
        </label>
        <textarea id="message" name="message" class="form-textarea block w-full mt-1" rows="3"></textarea>
      </div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Send RIV
      </button>
    </form>
  </div>
</div>

=======
                </div></a>
                
>>>>>>> 0bc469f1fdd3ca17bced25bc9d8fc0eacd9b9b7a
                <a href="/notify"><div style="background-color: lightblue;"class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-medium mb-2">Notifications</h3>
                        <p>Check Approved/Declined RIVs.</p>
                    </div>
                </div></a>

                <a href="/user"><div style="background-color: lightblue;"class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-medium mb-2">About</h3>
                    </div>
                </div></a>
           </div>
        </div>
    </div>
</x-app-layout>
