<?php
$landingPageUrl = 'https://www.amazon.com/deals';
$campaignId = isset($_GET['campaign_id']) ? $_GET['campaign_id'] : '';
$pubId = isset($_GET['pub_id']) ? $_GET['pub_id'] : '';
$url = isset($_GET['url']) ? $_GET['url'] : $landingPageUrl;

header('Location: ' . $url);
exit();
?>
