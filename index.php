<?php
$botToken = "your_token";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents("php://input");
$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$text = $update["message"]["text"];

if($text == "/start") {
    file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=Perfecto, has iniciado el bot");
}
?>
