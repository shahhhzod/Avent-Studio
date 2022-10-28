<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$com = $_POST['user_com'];

$token = "5381519169:AAHJGHoIcs13_VBTUphma94Po3chD5qdowY";
$chat_id = "-822143889";  
$arr = array(
  'Ваше И.Ф:' => $name,
  'Ваш номер телефона:' => $phone,
  'Добавить комментарий:' => $com
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: http://avent-studio.ru/');
} else {
  echo "Error";
}
?>