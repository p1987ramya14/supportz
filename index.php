<?php
$finalLandingPageUrl = 'https://www.amazon.com/gp/product/B0CWS8MNW1/ref=as_li_tl?th=1';

$referrerData = isset($_GET['referrer']) ? $_GET['referrer'] : '';

$redirectUrl = $finalLandingPageUrl . (strpos($finalLandingPageUrl, '?') === false ? '?' : '&') . 'referrer=' . urlencode($referrerData);

header('Location: ' . $redirectUrl);
exit();
?>
