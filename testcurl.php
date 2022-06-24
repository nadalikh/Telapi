<?php
$ch = curl_init();
curl_setopt_array(
    $ch, array(
    CURLOPT_URL => 'https://api.telegram.org/bot5362421313:AAGQm8uLoOFlVHk56ZVVAJJmTBKGIJfqYq0/sendMessage?chat_id='.$_GET['chat_id'].'&text='.$_GET['message'],
    CURLOPT_RETURNTRANSFER => true
));
$output = curl_exec($ch);
