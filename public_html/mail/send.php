<?php

if ($_POST['email'] && $_POST['name']) {
    $from    = $_POST['email'];
    $to      = 'info@scheme.com.ua';
    $subject = 'Отправленное письмо с сайта scheme.com.ua человеком по имени '. $_POST['name'];
    $message = 'От: ' . $_POST['email'] . " \r\n" . 'Сообщение: ' . $_POST['message'];
    $headers = 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion() ."\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=utf-8' . "\r\n";

    $m = mail($to, $subject, $message, $headers);
    if ($m) {echo 1;} else {echo 0;}
    header('Location: https://scheme.com.ua/');
}

?> 