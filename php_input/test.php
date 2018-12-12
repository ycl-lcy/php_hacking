<?php
    $postdata = file_get_contents("php://input",'r'); 
    var_dump($postdata); // php://input
    var_dump($_POST);
?>
