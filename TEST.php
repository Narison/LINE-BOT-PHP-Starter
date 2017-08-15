<?php
 
$strAccessToken = "HnYiosVXrVsSbH35XHeQCkTgPn6Pa3shrsh+K7RJ8RIPF8hpXr4IBm40k/4B2lmr1mIRRl+JFwcohXq7JIXSmOOoBl2UhUoaMEGuRaD5uQ1kXURzsh2vwjY58D1/RPO523ZweZArgtN8XaHy5eZJvQdB04t89/1O/w1cDnyilFU=";
 
$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "สวัสดี"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
}else if($arrJson['events'][0]['message']['text'] == "ชื่ออะไร"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันยังไม่มีชื่อนะ";
}else if($arrJson['events'][0]['message']['text'] == "ทำอะไรได้บ้าง"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ฉันทำอะไรไม่ได้เลย คุณต้องสอนฉันอีกเยอะ";
}else if($arrJson['events'][0]['message']['text'] == "button"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
 {
  $arrPostData['messages'][0]['type'] = "template";
  $arrPostData['messages'][0]['altText'] = "this is a buttons template";
  $arrPostData['messages'][0]['template'] = {
  $arrPostData['messages'][0]['type'] = "buttons";
  $arrPostData['messages'][0]['thumbnailImageUrl'] = "https://example.com/bot/images/image.jpg"; 
  $arrPostData['messages'][0]['title'] = "Menu";
  $arrPostData['messages'][0]['text'] = "Please select";
  $arrPostData['messages'][0]['actions'] =
   [
          {
           $arrPostData['messages'][0]['type'] = "postback",
           $arrPostData['messages'][0]['label'] = "Buy",
           $arrPostData['messages'][0]['data'] = "action=buy&itemid=123"
          },
          {
           $arrPostData['messages'][0]['type'] = "postback",
           $arrPostData['messages'][0]['label'] "Add to cart",
           $arrPostData['messages'][0]['data'] = "action=add&itemid=123"
          },
          {
           $arrPostData['messages'][0]['type'] = "uri",
           $arrPostData['messages'][0]['label'] "View detail",
           $arrPostData['messages'][0]['uri'] = "http://example.com/page/123"
          }
      ]
    }
  }
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "sticker";
  $arrPostData['messages'][0]['packageId'] = "2";
  $arrPostData['messages'][0]['stickerId'] = "149";
}
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
 
?>
