<?php

/* https://api.telegram.org/bot672470295:AAEzi2HiWk8BGeZuvM8fqLNyqRWBE_ylwcQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['content'];
$token = "672470295:AAEzi2HiWk8BGeZuvM8fqLNyqRWBE_ylwcQ";
$chat_id = "-348796170";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Текст' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}
?>