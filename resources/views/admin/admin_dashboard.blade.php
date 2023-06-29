
@extends('layouts.admin')

@section('content')
 
<body style="margin: 0; padding: 0; overflow :hidden;">
    <div class="card" style="background-color: #d1f5d0; width: 75%; order: 1;" data-toggle="tooltip" title=" Approve/Decline RIVs ">
     <a href="/show_notifications"> <div>
        <div >
          <div>
            <div >
              <h5 style="font-weight: 800; color: black; font-size: 25px;">Check Requisitions</h5>
            </div>
          </div>
        </div>
      </div></a>
    </div>

    <div class="card"  style="background-color: #d4e9ff; width: 75%; order: 2;" data-toggle="tooltip" title=" Check/Delete Stock">
      <a href = "/show_stock"><div >
        <div>
          <div >
            <div>
              <h5 style="font-weight: 800; color: black; font-size: 25px;">View Stock</h5>
            </div>
          </div>
        </div>
      </div></a>
    </div>

    <div class="card"  style="background-color: #d1f5d0; width: 75%; order: 3;" data-toggle="tooltip" title=" Enter new Stock">
      <a href = "/stock"><div>
        <div >
          <div>
            <div >
              <h5 style="font-weight: 800; color: black; font-size: 25px;">Update Stock</h5>
            </div>
          </div>
        </div>
      </div></a>
    </div>
    <div class="card"  style="background-color: #d4e9ff; width: 75%; order: 4;" data-toggle="tooltip" title="View Monthly Report">
      <a href = "/report"><div>
        <div >
          <div>
            <div >
              <h5 style="font-weight: 800; color: black; font-size: 25px;">Report</h5>
            </div>
        </div>
        </div>
        </div>
        </a></div>

</body>
@endsection

