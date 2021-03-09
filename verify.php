<?php 
  $access_token = '2bLPW2Xj95hxP/LqNAm7ewu70ybbL1dYEqAEjoapl5RBdfumPOuSCaB0A1Pq4bnpxfenJMP96ldhnNfPlnqqmvjPlVzjkRLtUmta/XRO7KqS5VzytSMc9sE2BLC/l7H8heCLMb58O53yZGUDnWij3AdB04t89/1O/w1cDnyilFU=';
  $url = 'https://api.line.me/v1/oauth/verify';
  $headers = array('Authorization: Bearer ' . $access_token);
  $ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  $result = curl_exec($ch);curl_close($ch);
  echo $result;
