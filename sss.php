<?php
require "vendor/autoload.php";
$access_token = '2bLPW2Xj95hxP/LqNAm7ewu70ybbL1dYEqAEjoapl5RBdfumPOuSCaB0A1Pq4bnpxfenJMP96ldhnNfPlnqqmvjPlVzjkRLtUmta/XRO7KqS5VzytSMc9sE2BLC/l7H8heCLMb58O53yZGUDnWij3AdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'c3afa3c398a7b2ca7560aa42b7723225';
$idPush = 'pong34976'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
