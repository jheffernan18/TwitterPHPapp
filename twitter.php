<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once('TwitterAPIExchange.php');

/*
$settings = array(
    'oauth_access_token' => "1048654494773530625-88xjCXZOgCuqCogP3ehdYR9pxhtFsr",
    'oauth_access_token_secret' => "Q3dq2F00moMX5xxqksaZlrx4CndbtM1oYSn4EbYZySTfL",
    'consumer_key' => "D0Nyzh3NeKKrFVijRui67XXw8",
    'consumer_secret' => "wgxoD5g27hQys42VaebxriDkweh7B9IpHx006HfEfzQo8xndvL"
);
*/
require_once('setting.php');

$url = "https://api.twitter.com/1.1/statuses/home_timeline.json";
$requestMethod = "GET";
$getfield = '?screen_name=kbaktidy';

$twitter = new TwitterAPIExchange($settings);

$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);

echo json_encode($string);
?>