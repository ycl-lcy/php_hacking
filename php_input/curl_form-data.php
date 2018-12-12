<?php
    $ch = curl_init();
    $data = array('aa'=>'123', 'bb'=>'456');
    curl_setopt($ch, CURLOPT_URL, 'http://0.0.0.0/test.php');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_exec($ch);
    curl_close($ch);
?>
