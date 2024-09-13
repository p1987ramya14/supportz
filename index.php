<?php
// Check if the parameters are set
$campaign_id = isset($_GET['campaign_id']) ? $_GET['campaign_id'] : null;
$pub_id = isset($_GET['pub_id']) ? $_GET['pub_id'] : null;
$gclid_id = isset($_GET['gclid_id']) ? $_GET['gclid_id'] : null;

// Process parameters (e.g., log them to a file or database)
// Example: Log the parameters to a file
$log_entry = date('Y-m-d H:i:s') . " - Campaign ID: $campaign_id, Pub ID: $pub_id, GCLID ID: $gclid_id\n";
file_put_contents('tracking_log.txt', $log_entry, FILE_APPEND);

// Redirect to the Amazon URL
$amazon_url = 'https://www.amazon.com'; // Change this to your specific Amazon URL
header('Location: ' . $amazon_url);
exit();
?>
