<?php

// Validate command-line arguments
if ($argc !== 2) {
    echo "Usage: php github_activity.php <github_username>\n";
    exit(1);
}

// Extract GitHub username from command-line arguments
$githubUsername = $argv[1];

// Include necessary helper files
require_once 'utils.php';
require_once 'display.php';

// Fetch user activity from GitHub API
try {
    $userActivity = fetchUserActivity($githubUsername);
} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage() . "\n";
    exit(1);
}

// Display user activity or message if none found
if (empty($userActivity)) {
    echo "No recent activity found for user $githubUsername.\n";
} else {
    formatActivityOutput($userActivity);
}