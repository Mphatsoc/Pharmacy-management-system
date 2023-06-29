@extends('layouts.dashboard')


->




@section('content')
    <h2 class="text-2xl font-medium text-gray-800 dark:text-gray-200" style="color: bt button primary;">
        Medicines</h2>
    <div style="padding: 3rem 0;"> 

    <!-- stock.blade.php -->

<!-- Display the search form -->
<form class="d-flex" role="search" id="searchForm">
    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" id="searchInput">
    <button class="btn btn-outline-primary" type="submit">Search</button>
</form>

<div id="searchResults"></div>


<!-- Perform the search and display the results -->
@if(isset($_GET['search']))
    <?php
    // Retrieve the search query from the URL parameters
    $searchQuery = $_GET['search'];

    // Perform the database query to search for medicine_name and quantity_on_hand
    // Replace 'your_database_name' with the actual name of your database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginpage";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT medicine_name, quantity_on_hand FROM medicines WHERE medicine_name LIKE ?");
    $searchQuery = "%{$searchQuery}%";
    $stmt->bind_param("s", $searchQuery);
    $stmt->execute();

    // Get the results
    $result = $stmt->get_result();
    ?>

    <!-- Display the search results -->
    @while($row = $result->fetch_assoc())
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{ $row['medicine_name'] }}</h5>
        <p class="card-text">Quantity on Hand: {{ $row['quantity_on_hand'] }}</p>
       
    </div>
</div>

    @endwhile

    <?php
    // Close the statement and the database connection
    $stmt->close();
    $conn->close();
    ?>
@endif

<!-- php -->


        <div
            style="background-color: white; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); border-radius: 0.375rem; padding-left: 1rem; padding-right: 1rem; padding-top: 1rem; padding-bottom: 2rem; margin-bottom: 1rem;">
            <div style="display: flex; flex-wrap: wrap;  padding: 0;" >
                <div style="display: flex; flex-wrap: wrap;  margin: 0;">
                <table class="table table-bordered table-stretched" style="width: 100%;">
    <thead>
        <tr>
            <th style="font-weight: 800; color: black;">Medicine Name</th>
            <th style="font-weight: 800; color: black;">Quantity on Hand</th>
            <th style="font-weight: 800; color: black;">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach (\App\Models\Medicine::orderBy('medicine_name')->get() as $medicine)
        <tr>
            <td>{{ $medicine->medicine_name }}</td>
            <td>{{ $medicine->quantity_on_hand }}</td>
            <td>
                <a href="{{ route('stock.show', $medicine) }}" class="btn btn-primary" style="color:white">Update Stockcard</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    .table-stretched {
        width: 100%;
    }
</style>


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
