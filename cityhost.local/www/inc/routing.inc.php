<?php
switch($id){
    case 'login':
        include 'inc/login.inc.php'; break;
	case 'register':
        include 'inc/register.inc.php'; break;
	case 'goods':
        include 'inc/goods.inc.php'; break;
	case 'editgoods':
        include 'inc/editgoods.inc.php'; break;
    case 'basket':
        include 'inc/basket.inc.php'; break;
    case 'logout':
        include 'inc/logout.inc.php'; break;
    case 'realperson':
        include 'inc/realperson.inc.php'; break;
    case 'countdown':
        if (isset($_SESSION['login'])) {
            include 'inc/countdown.inc.php';
        }else{
            header("Location: /index.php?id=login&referrer=countdown");
        }
        break;
    case 'mobilyslider':
        include 'inc/mobilyslider.inc.php'; break;
	default:
        include 'inc/index.inc.php';
}	