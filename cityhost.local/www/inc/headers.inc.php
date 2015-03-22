<?
header("Content-type: text/html; charset=utf-8");
$title = 'Супер-мега сайт';
$header = "Добро пожаловать на наш сайт!";
$id = strtolower(strip_tags(trim($_GET['id'])));
// Инициализация заголовков страницы
switch($id){
	case 'login':
		$title = 'Вход';
		$header = 'Войти на сайт';
		break;
	case 'register':
		$title = 'Зарегистрироваться';
		$header = 'Зарегистрироваться на сайте';
		break;
	case 'goods':
		$title = 'Товары';
		$header = 'Список всех имеющихся товаров';
		break;
	case 'editgoods':
		$title = 'Редактирование товаров';
		$header = 'Редактирование товаров';
		break;
	case 'basket':
		$title = 'Корзина';
		$header = 'Корзина пользователя';
		break;
    case 'realperson':
        $title = 'realPerson';
        $header = 'real person';
        break;
    case 'countdown':
        $title = 'countdown';
        $header = 'Countdown';
        break;
    case 'mobilyslider':
        $title = 'Mobilyslider example';
        $header = 'Mobilyslider example';
        break;
}