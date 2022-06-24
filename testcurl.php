<?php
$ch = curl_init();
curl_setopt_array(
    $ch, array(
    CURLOPT_URL => 'https://api.telegram.org/bot5362421313:AAGQm8uLoOFlVHk56ZVVAJJmTBKGIJfqYq0/sendMessage?chat_id=668578590&text=Hello+World',
    CURLOPT_RETURNTRANSFER => true
));

$output = curl_exec($ch);
echo $output;
