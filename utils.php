<?php

// Fetches the recent activity for a given GitHub username using the GitHub API.
function fetchUserActivity($username)
{
    // Construct the API request URL
    $apiUrl = "https://api.github.com/users/{$username}/events";

    // Set up the options for the HTTP request
    $requestOptions = [
        'http' => [
            'method' => 'GET',
            'header' => "User-Agent: php\r\n",
        ],
    ];

    $context = stream_context_create($requestOptions);

    // Make the HTTP GET request
    $response = file_get_contents($apiUrl, false, $context);

    // Handle any errors in the request
    if ($response === false) {
        throw new Exception("Failed to fetch data from GitHub API. Please check the username or connection.");
    }

    // Decode the JSON response
    $activityData = json_decode($response, true);

    // Check if the JSON response was decoded successfully
    if ($activityData === null) {
        throw new Exception("Failed to decode JSON response. Error: " . json_last_error_msg());
    }

    // Return the array of events (activity data)
    return $activityData;
}