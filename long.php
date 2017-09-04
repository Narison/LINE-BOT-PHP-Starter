<?php
$channelSecret = '53580e5121a5cf757d4ea3342b91b2da';
$access_token  = 'HnYiosVXrVsSbH35XHeQCkTgPn6Pa3shrsh+K7RJ8RIPF8hpXr4IBm40k/4B2lmr1mIRRl+JFwcohXq7JIXSmOOoBl2UhUoaMEGuRaD5uQ1kXURzsh2vwjY58D1/RPO523ZweZArgtN8XaHy5eZJvQdB04t89/1O/w1cDnyilFU=';
 
$bot = new BOT_API($channelSecret, $access_token);
 
if (!empty($bot->isEvents)) {
  $curMenu = GetThisMenu($bot->userId);
 
  if($curMenu > 0){
    switch ($curMenu) {
      case 1:
        if($bot->text == "ออก" || $bot->text == "end" || $bot->text == "exit" || $bot->text == "quit"){
          UpdateThisMenu($bot->userId,0);
          $result = "โอเค ข้าออกจากโหมด คิดเลข แล้ว";
        }else {
          $result = Cal($bot->text);
        }
        $bot->replyMessageNew($bot->replyToken, $result);
        break;
      case 2:
        if($bot->text == "ออก" || $bot->text == "end" || $bot->text == "exit" || $bot->text == "quit"){
          UpdateThisMenu($bot->userId,0);
          $result = "โอเค ข้าออกจากโหมด สอน แล้ว";
        }else {
          $result = Teach($bot->text,$bot->userId);
        }
        $bot->replyMessageNew($bot->replyToken, $result);
        break;
        case 3:
          $result = Note($bot->text,$bot->userId);
          UpdateThisMenu($bot->userId,0);
          $bot->replyMessageNew($bot->replyToken, $result);
          break;
      default:
        # code...
        break;
    }
  }else {
 
    if($bot->text == "hello" || $bot->text == "สวัสดี"){
 
      $bot->replyMessageNew($bot->replyToken, "สวัสดี ตัวข้านั้นคือบอทมีสิ่งใดให้ข้าช่วยหรือ");
 
    }
  //  elseif ($bot->text == "confirm") {
    //   $bot->SendConfirm();
    // }elseif ($bot->text == "ans=y" || "ans=N") {
  //    $bot->replyMessageNew($bot->replyToken, $bot->text);
    //}
    elseif ($bot->text == "คิดเลข" || $bot->text == "cal") {
      UpdateThisMenu($bot->userId,1);
      $bot->replyMessageNew($bot->replyToken, "ว่ามาเลยข้าพร้อมคิดเลขแล้ว");
 
    }elseif ($bot->text == "สอน" || $bot->text == "สอนบอท") {
      UpdateThisMenu($bot->userId,2);
      $bot->replyMessageNew($bot->replyToken, "ข้าพร้อมให้เจ้าสอนข้าแล้ว โดยที่เจ้าต้องสอนในแบบที่ตัวข้าเข้าใจ\nตัวอย่าง(คำถาม == คำตอบ)");
 
    }elseif ($bot->text == "โน๊ต" || $bot->text == "Note") {
      UpdateThisMenu($bot->userId,3);
      $bot->replyMessageNew($bot->replyToken, "ข้าพร้อมรับฟังเจ้าแล้วว่ามาได้เลย");
 
    }elseif ($bot->text == "ดูโน๊ต" || $bot->text == "Show Note") {
      $str = ShowNote($bot->userId);
      $bot->replyMessageNew($bot->replyToken, $str);
    }elseif ($bot->text == "ออก" || $bot->text == "end" || $bot->text == "exit" || $bot->text == "quit") {
      $bot->replyMessageNew($bot->replyToken, "ตอนนี้ข้าว่างอยู่");
    }else {
      $result = Question($bot->text);
      $bot->replyMessageNew($bot->replyToken, $result);
    }
 
  }
 
}
 
    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }
 
    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody();
    exit();
 
?>
