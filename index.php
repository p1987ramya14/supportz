<?php
$landingPageUrl = 'https://www.amazon.com/deals/shop/?referrer=appmetrica_tracking_id%3D28967406357521522%26ym_tracking_id%3D7734595558108521681';
$campaignId = isset($_GET['campaign_id']) ? $_GET['campaign_id'] : '';
$pubId = isset($_GET['pub_id']) ? $_GET['pub_id'] : '';
$url = isset($_GET['url']) ? $_GET['url'] : $landingPageUrl;

header('Location: ' . $url);
exit();
?>
