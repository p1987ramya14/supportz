<?php
// Capture tracking parameters from the URL
$gclid = isset($_GET['gclid']) ? $_GET['gclid'] : '';
$campaign_id = isset($_GET['campaign_id']) ? $_GET['campaign_id'] : '';
$adgroupid = isset($_GET['adgroupid']) ? $_GET['adgroupid'] : '';

// Log tracking parameters (optional, for debugging)
file_put_contents('tracking_log.txt', "GCLID: $gclid, Campaign ID: $campaign_id, Ad Group ID: $adgroupid\n", FILE_APPEND);

// Final destination URL (e.g., Amazon or another site)
$final_url = 'https://www.wakefieldpeanutco.com/prod_detail_list/raw-peanuts'; // Replace with your actual URL

// Append tracking parameters to the final URL if needed
$query_params = [];
if ($gclid) {
    $query_params['gclid'] = $gclid;
}
if ($campaign_id) {
    $query_params['campaign_id'] = $campaign_id;
}
if ($adgroupid) {
    $query_params['adgroupid'] = $adgroupid;
}

// Build query string
$query_string = http_build_query($query_params);

// Append query string to final URL
if ($query_string) {
    $final_url .= (parse_url($final_url, PHP_URL_QUERY) ? '&' : '?') . $query_string;
}

// Redirect the user to the final URL
header("Location: $final_url");
exit;
?>
