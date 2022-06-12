<?php
require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '5362421313:AAGQm8uLoOFlVHk56ZVVAJJmTBKGIJfqYq0';
$bot_username = 'nkhTestPhp_bot';
    
    // Create Telegram API object
    $telegram = new Telegram($bot_api_key);
	$chat_id = $telegram->ChatID();
    $chat = json_decode($telegram->getChat(["chat_id"=>$chat_id]));
//    $retured = exec("echo 'ali' >> /var/www/html/nkhpro/public/telegram/logs");
	$telegram->sendMessage(['chat_id'=>$chat_id, 'text'=> $chat_id]);
    // Handle telegram webhook request
    //  Request::sendMessage(['text'=>"hei"]);
    // Silence is golden!
    // log telegram errors

