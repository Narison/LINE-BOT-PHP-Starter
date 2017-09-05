<?php
include ('intelligence/testfunction.php');

$strAccessToken = "HnYiosVXrVsSbH35XHeQCkTgPn6Pa3shrsh+K7RJ8RIPF8hpXr4IBm40k/4B2lmr1mIRRl+JFwcohXq7JIXSmOOoBl2UhUoaMEGuRaD5uQ1kXURzsh2vwjY58D1/RPO523ZweZArgtN8XaHy5eZJvQdB04t89/1O/w1cDnyilFU=";

$content = file_get_contents('php://input');
$arrJson = json_decode($content, true);
 
$strUrl = "https://api.line.me/v2/bot/message/reply";
 
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
 
if($arrJson['events'][0]['message']['text'] == "ID"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "สวัสดี ID คุณคือ ".$arrJson['events'][0]['source']['userId'];
}else if($arrJson['events'][0]['message']['text'] == "ลงทะเบียน"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาพิมพ์รหัสพนักงานของคุณ";
}else if($arrJson['events'][0]['message']['text'] == "xxx"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาพิมพ์เลขท้าย 4 ตัว\nของบัตรประชาชนคุณ";
}else if($arrJson['events'][0]['message']['text'] == "xxxx"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "คุณ..............\nรหัสพนักงาน xxx\nได้ทำการลงทะเบียนเรียบร้อยแล้ว\nคุณสามารถดูรายการที่เปิดให้บริการ\nด้วยการพิมพ์ เมนู";
}else if($arrJson['events'][0]['message']['text'] == "เมนู"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "รายการที่ให้บริการ\nคุณสามารเลือกทำรายการได้ด้วยการพิมพ์หมายเลขของเมนู\n1. ขอลา";  
}else if($arrJson['events'][0]['message']['text'] == "1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณาเลือกประเภทการลา\n1. ลากิจ พิมพ์ 001\n2. ลาป่วย พิมพ์ 002";
}


else if($arrJson['events'][0]['message']['text'] == "003" || $arrJson->text == "cal"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากรอกสาเหตุการลา";
}

else if($arrJson['events'][0]['message']['text'] == "002"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "กรุณากรอกสาเหตุการลา";
}else if($arrJson['events'][0]['message']['text'] == "เป็นไข้"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "คุณ.........\nได้ทำการ ขอลาป่าว\nด้วยสาเหตุ..... \nกรุณาพิมพ์เลขท้าย 4 ตัว\nของบัตรประชาชนคุณ\nเพื่อยืนยัน";
}else if($arrJson['events'][0]['message']['text'] == "xxx1"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "text";
  $arrPostData['messages'][0]['text'] = "ระบบได้ทำการขออนุมัติลาเรียบร้อยแล้ว";
}else if($arrJson['events'][0]['message']['text'] == "Location"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "location";
  $arrPostData['messages'][0]['title'] = "บริษัท โปรซอฟท์ คอมเทค จำกัด";
  $arrPostData['messages'][0]['address'] = "287 ซอย7 หมู่5 081 359 6921 เปิดจนถึง 17:45";
  $arrPostData['messages'][0]['latitude'] = "18.8254729";
  $arrPostData['messages'][0]['longitude'] = "99.01145250000002";
}else if($arrJson['events'][0]['message']['text'] == "Img"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "image";
  $arrPostData['messages'][0]['originalContentUrl'] = "https://drive.google.com/file/d/0B_jiBQxoXSnBNzVvNWpUUTRXRm8/view?usp=sharing";
  $arrPostData['messages'][0]['previewImageUrl'] = "https://drive.google.com/file/d/0B_jiBQxoXSnBQkVVamd4YVpNVDA/view?usp=sharing";
}else if($arrJson['events'][0]['message']['text'] == "sticker"){
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
  $arrPostData['messages'][0]['type'] = "sticker";
  $arrPostData['messages'][0]['packageId'] = "2";
  $arrPostData['messages'][0]['stickerId'] = "149";
}else{
  $arrPostData = array();
  $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];
 if (!is_null($arrJson['events'])) {
	// Loop through each event
	foreach ($arrJson['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $text
			];
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $strAccessToken);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			echo $result . "\r\n";
		}
	}
}
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
