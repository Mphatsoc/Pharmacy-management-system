<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center mb-4">
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Home') }}
                </x-nav-link>
            </div>
     <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About') }}
        </h2>
            
           
                <a href="/riv" class="text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-100 transition duration-150 ease-in-out">
                    Riv
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
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-2xl font-semibold mb-2">Stock Management System</h2>
                    <p class="mb-4">Our stock management system is a powerful tool for keeping track of your medicine inventory. With features like real-time updates, automated restocking, and detailed analytics, you can stay on top of your stock levels and make informed decisions about your business.</p>

                    <h3 class="text-lg font-semibold mb-2">Features</h3>
                    <ul class="list-disc list-inside mb-4">
                        <li>Seemless workflow</li>
                        <li>Better stock organization</li>
                        <li>Detailed analytics</li>
                        <li>User-friendly interface</li>
                        <li>Customizable settings</li>
                    </ul>

                    <h3 class="text-lg font-semibold mb-2">How It Works</h3>
                    <p class="mb-4">Our stock management system works by connecting to your existing inventory and monitoring it in real-time. As medicines are sold or used, the system updates the stock levels automatically and alerts you when a reorder is necessary. With detailed analytics, you can track sales trends, monitor inventory turnover, and optimize your ordering process for maximum efficiency.</p>

                    <h3 class="text-lg font-semibold mb-2">Why Choose Us</h3>
                    <p class="mb-4">Our stock management system is designed with your needs in mind. Whether you're a small pharmacy or a large hospital, our software can help you keep track of your medicine inventory and make informed decisions about your business. With user-friendly features and customizable settings, our system is easy to use and adaptable to your unique needs.</p>

                    <h3 class="text-lg font-semibold mb-2">Get Started</h3>
                    <p>Ready to take control of your medicine inventory? Contact us today to learn more about our stock management system and how it can help your business.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
