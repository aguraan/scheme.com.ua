<?php

$SCHEME_HOST = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'];

switch ($_SERVER["REQUEST_URI"]) {
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
	default:
		http_response_code(404);
		$PAGE_TITLE = "Страница не найдена";
		$PAGE_BODY = "pages/404.php";
		$PAGE_HEAD = "";
}
?>