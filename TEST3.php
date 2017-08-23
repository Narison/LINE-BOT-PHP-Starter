<?php 
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('HnYiosVXrVsSbH35XHeQCkTgPn6Pa3shrsh+K7RJ8RIPF8hpXr4IBm40k/4B2lmr1mIRRl+JFwcohXq7JIXSmOOoBl2UhUoaMEGuRaD5uQ1kXURzsh2vwjY58D1/RPO523ZweZArgtN8XaHy5eZJvQdB04t89/1O/w1cDnyilFU=ISSUE');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '53580e5121a5cf757d4ea3342b91b2da']);
$response = $bot->getProfile('U34bcbad3cdd3977cbd6a5e921180ed7c');
if ($response->isSucceeded()) {
    $profile = $response->getJSONDecodedBody();
    echo $profile['displayName'];
    echo $profile['pictureUrl'];
    echo $profile['statusMessage'];
}
?>
