
@extends('layouts.report')

<style>
/* report.css */
table {
  border-collapse: collapse;
  width: 100%;
}

th,
td {
  border: 1px solid #000;
  padding: 8px;
  text-align: left;
}


    </style>

@section('content')
    <!-- Content -->
    <!-- report.blade.php -->
<div class="row">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="text-2xl font-medium text-gray-800 dark:text-gray-200 mb-4">Monthly Report</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <thead style= "background-color: #d1f5d0;">
                            <tr>
                                <th class="px-4 py-2 text-left" style= "font-weight: 800; color: black;">Medicine Name</th>
                                <th class="px-4 py-2 text-left" style= "font-weight: 800; color: black;">Starting Amount</th>
                                <th class="px-4 py-2 text-left" style= "font-weight: 800; color: black;">Closing Amount</th>
                                <th class="px-4 py-2 text-left" style= "font-weight: 800; color: black;">Losses</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stockCards as $stockCard)
                                <tr>
                                    <td class="border px-4 py-2">{{ $stockCard->medicine_name }}</td>
                                    <td class="border px-4 py-2">{{ $stockCard->quantity_received }}</td>
                                    <td class="border px-4 py-2">{{ $stockCard->quantity_on_hand }}</td>
                                    <td class="border px-4 py-2">{{ $stockCard->losses }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Content -->
@endsection
    

