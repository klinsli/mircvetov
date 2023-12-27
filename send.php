<?php
//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "6481775386:AAGHPnHsONRALuXdkeO4aCRw79QiOaJ5Bts";

//Сюда вставляем chat_id
$chat_id = "-1001964738003";

//Определяем переменные для передачи данных из нашей формы

	$name = ($_POST['name']);	
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);
	$comment = ($_POST['comment']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
		'Имя:' => $name,
        'E-mail:' => $email,
        'Телефон:' => $phone,
		'Комментарий:' => $comment
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
	echo '<script>window.setTimeout(function() { window.location = "index.php"; })</script>';


?>