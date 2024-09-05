<?php
$finalLandingPageUrl = 'https://www.facebook.com/login/';
$referrerData = isset($_GET['referrer']) ? $_GET['referrer'] : '';
$redirectUrl = $finalLandingPageUrl . (strpos($finalLandingPageUrl, '?') === false ? '?' : '&') . 'referrer=' . urlencode($referrerData);

header('Location: ' . $redirectUrl);
exit();
?>
