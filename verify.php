<?php
   $accessToken = "2bLPW2Xj95hxP/LqNAm7ewu70ybbL1dYEqAEjoapl5RBdfumPOuSCaB0A1Pq4bnpxfenJMP96ldhnNfPlnqqmvjPlVzjkRLtUmta/XRO7KqS5VzytSMc9sE2BLC/l7H8heCLMb58O53yZGUDnWij3AdB04t89/1O/w1cDnyilFU=";//copy ข้อความ Channel access token ตอนที่ตั้งค่า
   $content = file_get_contents('php://input');
   $arrayJson = json_decode($content, true);
   $arrayHeader = array();
   $arrayHeader[] = "Content-Type: application/json";
   $arrayHeader[] = "Authorization: Bearer {$accessToken}";
   //รับข้อความจากผู้ใช้
   $message = $arrayJson['events'][0]['message']['text'];
   //รับ id ของผู้ใช้
   $idu = $arrayJson['events'][0]['source']['userId'];
 $id = "U7ac026abcd6b6fff17e0a73ff6f4b70d";
   #ตัวอย่าง Message Type "Text + Sticker"


  if($message == "test"){
       $arrayPostData['to'] = $idu;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = $message;
      /*$arrayPostData['messages'][1]['type'] = "sticker";
      $arrayPostData['messages'][1]['packageId'] = "2";
      $arrayPostData['messages'][1]['stickerId'] = "34"; */
      pushMsg($arrayHeader,$arrayPostData);
   }
     if($message == "ขอid"){
       $arrayPostData['to'] = $idu;
      $arrayPostData['messages'][0]['type'] = "text";
      $arrayPostData['messages'][0]['text'] = "idของคุณคือ ...";
        $arrayPostData['messages'][1]['type'] = "text";
      $arrayPostData['messages'][1]['text'] =  $idu;
      pushMsg($arrayHeader,$arrayPostData);
   }

   function pushMsg($arrayHeader,$arrayPostData){
      $strUrl = "https://api.line.me/v2/bot/message/push";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL,$strUrl);
      curl_setopt($ch, CURLOPT_HEADER, false);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $arrayHeader);
      curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrayPostData));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      $result = curl_exec($ch);
      curl_close ($ch);
   }
   exit;
?>
