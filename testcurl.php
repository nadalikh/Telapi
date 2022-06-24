<?php
$ch = curl_init();
$messages = explode(",",$_GET['message']);

$m = "";
foreach ($messages as $message)
    $m .= $message."%0A";
var_dump($m);

curl_setopt_array(
    $ch, array(
    CURLOPT_URL => 'https://api.telegram.org/bot5362421313:AAGQm8uLoOFlVHk56ZVVAJJmTBKGIJfqYq0/sendMessage?chat_id='.$_GET['chat_id'].'&text='.$m,
    CURLOPT_RETURNTRANSFER => true
));
var_dump($messages);
$output = curl_exec($ch);
echo $output;
