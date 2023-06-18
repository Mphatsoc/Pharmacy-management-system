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
                        <div class="row">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="mb-4">
                                    <h2 class="text-2xl font-medium text-gray-800 dark:text-gray-200" style="color: white;">
                                        Monthly Report</h2>
                                    <div class="btn-group mt-2" role="group" aria-label="Report Sections">
                                        <button type="button" class="btn btn-outline-secondary"
                                            id="monthlyReportBtn">Stock</button>
                                        <button type="button" class="btn btn-outline-info"
                                            id="otherSectionBtn">Requisition</button>
                                    </div>
                                </div>

                                <div id="monthlyReportSection">
                                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                                @php
                                                    $groupedStockCards = $stockCards->groupBy(function ($stockCard) {
                                                        $date = \Carbon\Carbon::parse($stockCard->date)->format('Y-m');
                                                        return $date . '_' . $stockCard->medicine_name;
                                                    });
                                                    
                                                    // Sort the grouped stock cards by date and medicine name
                                                    $sortedGroupedStockCards = $groupedStockCards->sortKeys();
                                                @endphp

                                                @php
                                                    $prevFormattedDate = '';
                                                @endphp

                                                @foreach ($sortedGroupedStockCards as $groupKey => $group)
                                                    @php
                                                        [$date, $medicineName] = explode('_', $groupKey);
                                                        $formattedDate = \Carbon\Carbon::parse($date)->format('F Y');
                                                    @endphp

                                                    @if ($formattedDate !== $prevFormattedDate)
                                                        @php
                                                            $prevFormattedDate = $formattedDate;
                                                        @endphp

                                                        <h2>{{ $formattedDate }}</h2>
                                                    @endif

                                                    <button style="margin-left: 1rem;" type="button"
                                                        class="btn btn-outline-primary" disabled
                                                        style="font-weight: 800; ">{{ $medicineName }}</button>

                                                    <div class="container my-4">
                                                        <div class="table-responsive">
                                                            <table
                                                                class="table  table-bordered border-secondary table-striped">
                                                                <thead s>
                                                                    <tr>
                                                                        <th scope="col">Date</th>
                                                                        <th scope="col">Medicine Name</th>
                                                                        <th scope="col">Starting Amount</th>
                                                                        <th scope="col">Closing Amount</th>
                                                                        <th scope="col">Losses</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($group as $stockCard)
                                                                        <tr>
                                                                            <td>{{ $stockCard->date }}</td>
                                                                            <td>{{ $stockCard->medicine_name }}</td>
                                                                            <td>{{ $stockCard->quantity_received }}</td>
                                                                            <td>{{ $stockCard->quantity_on_hand }}</td>
                                                                            <td>{{ $stockCard->losses }}</td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="otherSection" style="display: none;">
                                    <div class="container my-4">
                                        <div class="table-responsive">
                                            @php
                                                $groupedRivs = $rivs->groupBy(function ($riv) {
                                                    $date = \Carbon\Carbon::parse($riv->date)->format('Y-m');
                                                    return $date . '_' . $riv->medicine_name;
                                                });
                                                
                                                // Sort the grouped rivs by date and medicine name
                                                $sortedGroupedRivs = $groupedRivs->sortKeys();
                                            @endphp

                                            @php
                                                $prevFormattedDate = '';
                                            @endphp

                                            @foreach ($sortedGroupedRivs as $groupKey => $group)
                                                @php
                                                    [$date, $medicineName] = explode('_', $groupKey);
                                                    $formattedDate = \Carbon\Carbon::parse($date)->format('F Y');
                                                @endphp

                                                @if ($formattedDate !== $prevFormattedDate)
                                                    @php
                                                        $prevFormattedDate = $formattedDate;
                                                    @endphp

                                                    <h2>{{ $formattedDate }}</h2>
                                                @endif

                                                <button type="button" class="btn btn-outline-primary" disabled
                                                    style="font-weight: 800;">{{ $medicineName }}</button>

                                                <table class="table table-bordered border-secondary">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="font-weight: bold; color: black;">Date
                                                            </th>
                                                            <th scope="col" style="font-weight: bold; color: black;">
                                                                Medicine name</th>
                                                            <th scope="col" style="font-weight: bold; color: black;">
                                                                Strength</th>
                                                            <th scope="col" style="font-weight: bold; color: black;">
                                                                Stock Balance</th>
                                                            <th scope="col" style="font-weight: bold; color: black;">
                                                                Quantity Requested</th>
                                                            <th scope="col" style="font-weight: bold; color: black;">
                                                                Status</th>
                                                            <th scope="col" style="font-weight: bold; color: black;">
                                                                Department</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                        @foreach ($group as $riv)
                                                            <tr>
                                                                <td>{{ $riv->date }}</td>
                                                                <td>{{ $riv->medicine_name }}</td>
                                                                <td>{{ $riv->strength }}</td>
                                                                <td>{{ $riv->stock_balance }}</td>
                                                                <td>{{ $riv->quantity_requested }}</td>
                                                                <td
                                                                    style="background-color:
                                    @if ($riv->status === 'In Progress') #bcecf5
                                    @elseif ($riv->status === 'Approved')
                                        #cdfade
                                    @elseif ($riv->status === 'Declined')
                                        #f2a5a5 @endif;
                                    color: black;">
                                                                    {{ $riv->status }}
                                                                </td>
                                                                <td>{{ $riv->department }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
@endsection
