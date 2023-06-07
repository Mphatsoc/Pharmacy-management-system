@extends('layouts.dashboard')

@section('content')
    <!-- Content -->
    <div style="padding-top: 3rem;">

        <div style="width: 100%; margin: 0 auto; ">
            <form method="POST" action="{{ route('stock.add', $id) }}"
                style="width: 80%; margin: auto; background-color: white; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); border-radius: 0.375rem; padding-left: 1rem; padding-right: 1rem; padding-top: 1rem; padding-bottom: 2rem; margin-bottom: 1rem;">
                @csrf
                <div style="background-color: #d4e9ff; margin: 0 auto; padding: 20px; border-radius: 10px;">
                    <div style="display: flex; flex-direction: column;">
                        <label for="date"
                            style="font-size: 1.125rem; font-weight: bold; margin-bottom: 0.5rem; ">Date:</label>
                        <input type="date" id="date" name="date" required
                            style="border-radius: 8px; padding: 4px;">
                    </div>
                </div>
                <br><br>
                <div style="background-color: #d1f5d0; margin: 0 auto; padding: 20px; border-radius: 10px;">
                    <div style="display: flex; flex-direction: column;">
                        <label for="quantity_received"
                            style="font-size: 1.125rem; font-weight: bold; margin-bottom: 0.5rem;">Quantity
                            Received:</label>
                        <input type="number" id="quantity_received" name="quantity_received" required
                            style="border-radius: 8px; padding: 4px;">
                    </div>
                </div>
                <br><br>
                <div style="background-color: #d4e9ff; margin: 0 auto;  padding: 20px; border-radius: 10px;">
                    <div style="display: flex; flex-direction: column;">
                        <label for="quantity_issued"
                            style="font-size: 1.125rem; font-weight: bold; margin-bottom: 0.5rem;">Quantity
                            Issued:</label>
                        <input type="number" id="quantity_issued" name="quantity_issued" required
                            style="border-radius: 8px; padding: 4px;">
                    </div>
                </div>
                <br><br>
                <div style="background-color: #d1f5d0; margin: 0 auto;  padding: 20px; border-radius: 10px;">
                    <div style="display: flex; flex-direction: column;">
                        <label for="quantity_on_hand"
                            style="font-size: 1.125rem; font-weight: bold; margin-bottom: 0.5rem;">Quantity
                            On Hand:</label>
                        <input type="number" id="quantity_on_hand" value="{{ $medicine->quantity_on_hand }}"
                            name="quantity_on_hand" required style="border-radius: 8px; padding: 4px;">
                    </div>
                </div>
                <br><br>
                <div style="background-color: #d4e9ff; margin: 0 auto; padding: 20px; border-radius: 10px;">
                    <div style="display: flex; flex-direction: column;">
                        <label for="losses"
                            style="font-size: 1.125rem; font-weight: bold; margin-bottom: 0.5rem;">Losses:</label>
                        <input type="number" id="losses" name="losses" required
                            style="border-radius: 8px; padding: 4px;">
                    </div>
                </div>
                <br><br>
                <div style="display: flex; justify-content: center;">
                    <button type="save"
                        style="background-color: #d1f5d0; color: black; font-weight: bold; font-size: 1rem; padding: 0.5rem 1rem; border-radius: 0.375rem;">Submit</button>
                </div>
                <br>
            </form>
        </div>
    </div>

    <!-- Content -->
@endsection
