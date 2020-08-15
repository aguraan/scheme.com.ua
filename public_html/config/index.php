<?php

$SCHEME_HOST = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'];

switch (parse_url($_SERVER["REQUEST_URI"])["path"]) {
// switch ($_SERVER["REQUEST_URI"]) {
	case "/":
		$CURRENT_PAGE = "Главная"; 
		$PAGE_TITLE = "SCHEME | Высокоточные 3D обмеры помещений";
		$PAGE_BODY = "pages/main.php";
		$PAGE_HEAD = "page_head/main_head.php";
		break;
	case "/privacy_policy":
		$CURRENT_PAGE = "Политика Конфиденциальности"; 
		$PAGE_TITLE = "Политика Конфиденциальности";
		$PAGE_BODY = "pages/privacy_policy.php";
		$PAGE_HEAD = "page_head/privacy_policy_head.php";
		break;
	case "/mini-bot-auth-callback":
		$CURRENT_PAGE = "Код авторизации";
		$PAGE_TITLE = "Код авторизации";
		$PAGE_BODY = "pages/mini_bot_auth_callback.php";
		$PAGE_HEAD = "pages_head/mini_bot_auth_callback_head.php";
		break;
	default:
		http_response_code(404);
		$PAGE_TITLE = "Страница не найдена";
		$PAGE_BODY = "pages/404.php";
		$PAGE_HEAD = "";
}
?>