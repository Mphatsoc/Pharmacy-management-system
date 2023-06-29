@extends('layouts.dashboard')


->




@section('content')
    <h2 class="text-2xl font-medium text-gray-800 dark:text-gray-200" style="color: bt button primary;">
        Medicines</h2>
    <div style="padding: 3rem 0;">


        <div
            style="background-color: white; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); border-radius: 0.375rem; padding-left: 1rem; padding-right: 1rem; padding-top: 1rem; padding-bottom: 2rem; margin-bottom: 1rem;">
            <div style="display: flex; flex-wrap: wrap;">
                <div style="display: flex; flex-wrap: wrap;">
                    <div style="display: flex; flex-wrap: wrap; margin: -0.5rem;">
                    @foreach (\App\Models\Medicine::orderBy('medicine_name')->get() as $medicine)
    
                            <div
                                style="flex: 0 0 calc(33.33% - 1rem); background-color: lightblue; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); border-radius: 0.5rem; margin: 0.5rem;">
                                <a href="{{ route('stock.show', $medicine) }}" style="text-decoration: none; color: inherit;">
                                    <div style="padding: 1.5rem; color: #111827;">
                                        <h3
                                            style="font-size: 1.125rem; font-weight: 800; margin-bottom: 0.5rem; color: black;">
                                            {{ $medicine->medicine_name }}</h3>
                                        <p style="margin-bottom: 0;">Quantity: {{ $medicine->quantity_on_hand }}</p>
                                        <a href="{{ route('stock.show', $medicine) }}" class="btn btn-primary"
                                            style="margin-top: 0.5rem; color:white;">update
                                            stockcard</a>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Add New Medicine Form -->
        <div
            style="background-color: white; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); border-radius: 0.375rem; padding: 1rem; margin-top: 1rem;">
            <!--adding new stock of meicine by the admin in a case where new medicine has been brought in-->
            <h3>Add New Medicine</h3>
            <form action="{{ route('stock') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="medicine_name" style="font-weight: 800;">Medicine Name</label>
        <input type="text" id="medicine_name" name="medicine_name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="quantity_on_hand" style="font-weight: 800;">Quantity on Hand</label>
        <input type="number" id="quantity_on_hand" name="quantity_on_hand" class="form-control" required>
    </div><br>
    <button type="submit" class="btn btn-primary">Add Medicine</button>
</form>

        </div>
        


    
    @endsection
