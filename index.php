<?php
$finalLandingPageUrl = 'https://www.letifly.com/collections/planters?srsltid=AfmBOortfFdsQdJolr_06CwAidsNth4T3UFfCKBpmQBq2ngmt9KZdCwJ';
$referrerData = isset($_GET['referrer']) ? $_GET['referrer'] : '';
$redirectUrl = $finalLandingPageUrl . (strpos($finalLandingPageUrl, '?') === false ? '?' : '&') . 'referrer=' . urlencode($referrerData);

header('Location: ' . $redirectUrl);
exit();
?>
