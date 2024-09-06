<?php

$baseUrl = 'https://www.facebook.com/Google';

$referrerData = isset($_GET['referrer']) ? $_GET['referrer'] : '';

if ($referrerData !== '') {
    $redirectUrl = $baseUrl . (strpos($baseUrl, '?') === false ? '?' : '&') . 'referrer=' . urlencode($referrerData);
} else {
    $redirectUrl = $baseUrl;
}

header('Location: ' . $redirectUrl, true, 301);
exit();
?>
