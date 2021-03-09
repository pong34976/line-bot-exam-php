<?php 
  $access_token = 'a40f6b9359e38362e37992cedc88e6f9';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
