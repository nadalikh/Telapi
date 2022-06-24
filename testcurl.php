<?php
$ch = curl_init();
curl_setopt_array(
    $ch, array(
    CURLOPT_URL => 'https://api.telegram.org/bot5362421313:AAGQm8uLoOFlVHk56ZVVAJJmTBKGIJfqYq0/sendMessage?chat_id='.$_GET['chat_id'].'&text='.$_GET['message']."%0Afffff",
    CURLOPT_RETURNTRANSFER => true
));
var_dump($_GET['message']);
$output = curl_exec($ch);
echo $output;
