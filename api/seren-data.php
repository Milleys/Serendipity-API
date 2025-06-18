<?php
header("Content-Type: application/json");

$name = $_GET['name'] ?? 'Guest';
echo json_encode([
    "message" => "Hello, $name! Welcome to Serendipity Data."
]);
