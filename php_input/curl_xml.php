<?php
    $ch = curl_init();
    $data = '<?xml version="1.0" encoding="utf-8"?><root><aa>123</aa><bb>456</bb></root>';
    curl_setopt($ch, CURLOPT_URL, 'http://0.0.0.0/test.php');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: text/xml;charset=\"utf-8\""));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_exec($ch);
    curl_close($ch);
?>
