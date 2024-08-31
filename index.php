<?php
// Define the base Amazon URL
$baseAmazonUrl = 'https://www.amazon.com/gp/product/B0CWS8MNW1/ref=as_li_tl?th=1';

// Check if the 'referrer' query parameter is present and sanitize it
if (isset($_GET['referrer']) && !empty($_GET['referrer'])) {
    // Sanitize the referrer parameter to avoid potential issues
    $referrer = filter_var($_GET['referrer'], FILTER_SANITIZE_STRING);
    // Append the referrer tracking information to the base Amazon URL
    $newPageUrl = $baseAmazonUrl . '&' . $referrer;
} else {
    // Use the base Amazon URL if no referrer is present
    $newPageUrl = $baseAmazonUrl;
}

// Send a 301 Moved Permanently status code and redirect
header('HTTP/1.1 301 Moved Permanently');
header('Location: ' . $newPageUrl);
exit();
?>
