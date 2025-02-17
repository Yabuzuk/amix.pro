<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$token = "1519701472:AAF6Z5aFZXaaw0fw9dTgYQ1U7a0AVEEDG88";
 
$chat_id = "-335182799";
 
$arr = array(
  'Компания: ' => $name,
  'email: ' => $email,
  'message' => $message
);
 

 
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "<p>Thank you";
  } else {  
  echo "Error";
}
?>