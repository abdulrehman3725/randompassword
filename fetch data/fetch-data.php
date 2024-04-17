<?php
// Function to fetch data from an API
function fetchDataFromAPI($url) {
    // Initialize cURL session
    $ch = curl_init($url);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session
    $response = curl_exec($ch);

    // Close cURL session
    curl_close($ch);

    // Decode JSON response
    return json_decode($response, true);
}

// API endpoint URL
$apiUrl = 'https://api.example.com/data';

// Fetch data from API
$data = fetchDataFromAPI($apiUrl);

// Process the data (example: calculate average value)
$sum = array_sum($data);
$count = count($data);
$average = $sum / $count;

// Output the result
echo "Average value of data fetched from API: $average";
?>
