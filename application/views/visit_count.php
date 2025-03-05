<?php
$file = 'visit_count1.txt';

// Check if the file exists
if (!file_exists($file)) {
    // Create the file and set the initial count to 0
    if (file_put_contents($file, 0) === false) {
        echo json_encode(['error' => 'Failed to create visit_count.txt']);
        exit;
    }
}

// Read the current count
$count = (int)file_get_contents($file);

// Increment the count
$count++;

// Write the new count back to the file
if (file_put_contents($file, $count) === false) {
    echo json_encode(['error' => 'Failed to write to visit_count.txt']);
    exit;
}

// Return the count as a JSON response
echo json_encode(['count' => $count]);
?>
