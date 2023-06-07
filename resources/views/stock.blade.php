@extends('layouts.dashboard')

@section('content')
    <div style="padding: 3rem 0;">
        <div
            style="background-color: white; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); border-radius: 0.375rem; padding-left: 1rem; padding-right: 1rem; padding-top: 1rem; padding-bottom: 2rem; margin-bottom: 1rem;">
            <div style="display: flex; flex-wrap: wrap;">
                <div style="display: flex; flex-wrap: wrap;">
                    <div style="display: flex; flex-wrap: wrap; margin: -0.5rem;">
                        @foreach ($medicines as $medicine)
                            <div
                                style="flex: 0 0 calc(33.33% - 1rem); background-color: lightblue; overflow: hidden; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); border-radius: 0.5rem; margin: 0.5rem;">
                                <a href="{{ route('stock.show', $medicine) }}" style="text-decoration: none; color: inherit;">
                                    <div style="padding: 1.5rem; color: #111827;">
                                        <h3
                                            style="font-size: 1.125rem; font-weight: 800; margin-bottom: 0.5rem; color: black;">
                                            {{ $medicine->medicine_name }}</h3>
                                        <p style="margin-bottom: 0;">Quantity: {{ $medicine->quantity_on_hand }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
