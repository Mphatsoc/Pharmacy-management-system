@extends('layouts.admin')

@section('content')

    <body style="margin: 0; padding: 0; overflow: hidden;">
        <div
            style="display: flex; flex-wrap: wrap; justify-content: flex-start; padding-left: 30px; margin-top: 20px; margin-bottom: 150px;">
            <div class="card"
                style="background-color: #d1f5d0; width: 80%; order: 1; padding: 20px; box-sizing: border-box; margin-right: 10px; margin-bottom: 10px;">
                <a href="/show_notifications" data-toggle="tooltip" title="Approve/Decline RIVs">
                    <div>
                        <div>
                            <div>
                                <div>
                                    <h5 style="font-weight: 200; color: black; font-size: 30px;">Check Requisitions</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="card"
                style="background-color: #d4e9ff; width: 80%; order: 2; padding: 20px; box-sizing: border-box; margin-right: 10px; margin-bottom: 10px;">
                <a href="/show_stock" data-toggle="tooltip" title="Check/Delete Stock">
                    <div>
                        <div>
                            <div>
                                <div>
                                    <h5 style="font-weight: 200; color: black; font-size: 30px;">View Stock</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="card"
                style="background-color: #d1f5d0; width: 80%; order: 3; padding: 20px; box-sizing: border-box; margin-right: 10px; margin-bottom: 10px;">
                <a href="/stock" data-toggle="tooltip" title="Enter new Stock">
                    <div>
                        <div>
                            <div>
                                <div>
                                    <h5 style="font-weight: 200; color: black; font-size: 30px;">Update Stock</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="card"
                style="background-color: #d4e9ff; width: 80%; order: 4; padding: 30px; box-sizing: border-box; margin-right: 10px; margin-bottom: 10px;">
                <a href="/report" data-toggle="tooltip" title="View Monthly Report">
                    <div>
                        <div>
                            <div>
                                <div>
                                    <h5 style="font-weight: 200; color: black; font-size: 30px;">Report</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </body>
@endsection






























{{-- @extends('layouts.admin')

@section('content')

    <body style="margin: 0; padding: 0; overflow :hidden;">
        <div class="card" style="background-color: #d1f5d0; width: 75%; order: 1;" data-toggle="tooltip"
            title=" Approve/Decline RIVs ">
            <a href="/show_notifications">
                <div>
                    <div>
                        <div>
                            <div>
                                <h5 style="font-weight: 800; color: black; font-size: 25px;">Check Requisitions</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="card" style="background-color: #d4e9ff; width: 100%; order: 2;" data-toggle="tooltip"
            title=" Check/Delete Stock">
            <a href="/show_stock">
                <div>
                    <div>
                        <div>
                            <div>
                                <h5 style="font-weight: 800; color: black; font-size: 25px;">View Stock</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="card" style="background-color: #d1f5d0; width: 75%; order: 3;" data-toggle="tooltip"
            title=" Enter new Stock">
            <a href="/stock">
                <div>
                    <div>
                        <div>
                            <div>
                                <h5 style="font-weight: 800; color: black; font-size: 25px;">Update Stock</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="card" style="background-color: #d4e9ff; width: 75%; order: 4;" data-toggle="tooltip"
            title="View Monthly Report">
            <a href="/report">
                <div>
                    <div>
                        <div>
                            <div>
                                <h5 style="font-weight: 800; color: black; font-size: 25px;">Report</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </body>
@endsection --}}
