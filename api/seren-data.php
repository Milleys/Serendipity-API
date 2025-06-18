<?php
header("Content-Type: application/json");

// Read and decode the JSON data
$activities = json_decode(file_get_contents(__DIR__ . '/activities.json'), true);

// Pick a random activity
$randomActivity = $activities[array_rand($activities)];

// Return it as JSON
echo json_encode($randomActivity);
