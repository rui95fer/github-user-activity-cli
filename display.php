<?php

// Formats and outputs the activity events for a given user
function formatActivityOutput(array $events)
{
    // Iterate through each event in the events array
    foreach ($events as $event) {
        // Determine the type of event and output a corresponding message
        switch ($event['type']) {
            case 'PushEvent':
                // Output a message indicating the number of commits pushed to a repository
                echo "Pushed " . count($event['payload']['commits']) . " commits to " . $event['repo']['name'] . "\n";
                break;
            case 'IssuesEvent':
                // Output a message indicating a new issue was opened in a repository
                echo "Opened a new issue in " . $event['repo']['name'] . "\n";
                break;
            case 'WatchEvent':
                // Output a message indicating a repository was starred
                echo "Starred " . $event['repo']['name'] . "\n";
                break;
            default:
                // Output a message indicating an unknown event type
                echo "Unknown event type: " . $event['type'] . "\n";
        }
    }
}