<?php
    $path = "http://apis.data.go.kr/1741000/DisasterMsg2/getDisasterMsgList?ServiceKey=인증키&type=xml";
    $xml = simplexml_load_file($path);
     
    foreach($xml->row as $message) {
        echo "보낸시간 : ".$message->create_date."<br>";
        echo "보낸 지역 : ".$message->location_name."<br>";
        echo "메시지 내용 : ".$message->msg."<br><br>";
    }
?>
