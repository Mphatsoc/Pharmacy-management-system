@extends('layouts.dashboard')

@section('content')
    <!-- Content -->
    <h3 style="font-weight: 800; color: black; ">{{ $medicine->medicine_name }}</h3>
    <div style="padding-top: 3rem;">


        <div style="width: 100%; margin: 0 auto; ">
            <form method="POST" action="{{ route('stock.add', $id) }}" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="date" class="form-label fw-bold">Date:</label>
                    <input type="date" class="form-control" id="date" name="date" required
                        value="<?php echo date('Y-m-d'); ?>" readonly>
                </div>
                <div class="col-md-6">
                    <label for="quantity_received" class="form-label fw-bold">Quantity Recieved:</label>
                    <input type="number" class="form-control" id="quantity_received" name="quantity_received" required>
                </div>
                <div class="col-md-6">
                    <label for="quantity_issued" class="form-label fw-bold">Quantity Issued:</label>
                    <input type="number" class="form-control" id="quantity_issued" name="quantity_issued" required>
                </div>
                <div class="col-md-6">
                    <label for="quantity_on_hand" class="form-label fw-bold">Quantity On Hand:</label>
                    <input type="number" class="form-control" id="quantity_on_hand" name="quantity_on_hand">
                </div>
                <div class="col-md-6">
                    <label for="losses" class="form-label fw-bold">Losses:</label>
                    <input type="number" class="form-control" id="losses" name="losses" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

            </form>
        </div>
    </div>

    <!-- Content -->
@endsection
