<?php
$finalLandingPageUrl = 'https://www.amazon.com/b/?node=116063164011';

$referrerData = isset($_GET['referrer']) ? $_GET['referrer'] : '';

$redirectUrl = $finalLandingPageUrl . (strpos($finalLandingPageUrl, '?') === false ? '?' : '&') . 'referrer=' . urlencode($referrerData);

header('Location: ' . $redirectUrl);
exit();
?>
