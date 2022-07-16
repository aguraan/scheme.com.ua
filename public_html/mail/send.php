<?php

if ($_POST['email'] && $_POST['name']) {
    $from    = $_POST['email'];
    $to      = 'info@scheme.com.ua';
    $subject = 'Надісланий лист із сайту scheme.com.ua людиною на ім\'я '. $_POST['name'];
    $message = 'Від: ' . $_POST['email'] . " \r\n" . 'Повідомлення: ' . $_POST['message'];
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