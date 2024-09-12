<?php
    // Get the gclid from the URL
    $gclid = isset($_GET['gclid']) ? $_GET['gclid'] : '';

    // Amazon URL
    $amazon_url = 'https://www.wakefieldpeanutco.com/prod_detail_list/raw-peanuts';

    // If gclid is present, append it to the Amazon URL
    if ($gclid) {
        $amazon_url .= '?gclid=' . urlencode($gclid);
    }

    // Redirect to Amazon
    header("Location: " . $amazon_url);
    exit;
?>
