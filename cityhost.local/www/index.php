<?
    define('PATH_LOG', 'path.log');
	include 'inc/headers.inc.php';
    ob_start();
    session_start();
?>
<!DOCTYPE html >
<html >
	<head>
		<title><?= $title?></title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

        <link  rel="stylesheet" href="/public/bootstrap/dist/css/bootstrap.min.css">
        <script src="public/jquery-2.1.1.min.js"></script>
        <script src="/public/jquery.validate.min.js"></script>

<!--        <script src="/public/bootstrap/dist/js/bootstrap.min.js"></script>-->

        <script src="public/bootstrap/js/transition.js"></script>
        <script src="public/bootstrap/js/dropdown.js"></script>
        <script src="public/bootstrap/js/collapse.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link  rel="stylesheet" href="/public/jquery.realperson.package-2.0.0/jquery.realperson.css">
        <script src="/public/jquery.realperson.package-2.0.0/jquery.plugin.js"></script>
        <script src="/public/jquery.realperson.package-2.0.0/jquery.realperson.js"></script>

        <link href="/public/mobilyslider/css/default.css" rel="stylesheet" type="text/css" />
        <script src="/public/mobilyslider/js/mobilyslider.js" type="text/javascript"></script>
        <script src="/public/mobilyslider/js/init.js" type="text/javascript"></script>

        <link rel="stylesheet" type="text/css" href="/css/style.css" />

<!--        <script src="js/register.js"></script>-->
	</head>
	<body>

    <div class="pf-wrapper">

		<div id="header">
			<!-- Верхняя часть страницы -->
            <?php if (isset($_SESSION['login'])){   ?>
                <h3 align="right"> <?=$_SESSION['login']?>  <a href="/?id=logout">выйти</a></h3>
            <?php }?>
            <!-- Верхняя часть страницы -->
		</div>



        <div id="nav" class="dropdown">
            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Меню
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a role="menuitem" tabindex="-1" href='index.php'>Домой</a></li>
                <li><a role="menuitem" tabindex="-1" href='index.php?id=register'>Регистрация</a></li>
                <li><a role="menuitem" tabindex="-1" href='index.php?id=login'>Вход</a></li>
                <li><a role="menuitem" tabindex="-1" href='index.php?id=goods'>Товары</a></li>
                <li><a role="menuitem" tabindex="-1" href='index.php?id=editgoods'>Редактирование товара</a></li>
                <li><a role="menuitem" tabindex="-1" href='index.php?id=basket'>Корзина</a></li>
                <li><a role="menuitem" tabindex="-1" href='index.php?id=realperson'>RealPersonCheck</a></li>
                <li><a role="menuitem" tabindex="-1" href='index.php?id=countdown'>Countdown</a></li>
                <li><a role="menuitem" tabindex="-1" href='index.php?id=mobilyslider'>Mobilyslider</a></li>
            </ul>
        </div>





		<div id="content">
			<!-- Заголовок -->
			<h1><?= $header?></h1>
			<!-- Заголовок -->

			<!-- Область основного контента -->
			<?php
				include 'inc/routing.inc.php';
			?>	
			<!-- Область основного контента -->
		</div>


<!--		<div id="nav" >-->
<!--			<h2>Навигация по сайту</h2>-->
<!--			<ul >-->
<!--				<li><a role="menuitem" tabindex="-1" href='index.php'>Домой</a></li>-->
<!--				<li><a role="menuitem" tabindex="-1" href='index.php?id=register'>Регистрация</a></li>-->
<!--				<li><a role="menuitem" tabindex="-1" href='index.php?id=login'>Вход</a></li>-->
<!--                <li><a role="menuitem" tabindex="-1" href='index.php?id=goods'>Товары</a></li>-->
<!--                <li><a role="menuitem" tabindex="-1" href='index.php?id=editgoods'>Редактирование товара</a></li>-->
<!--                <li><a role="menuitem" tabindex="-1" href='index.php?id=basket'>Корзина</a></li>-->
<!--			</ul>-->
<!---->
<!---->
<!--		</div>-->











		<div id="footer">
			<!-- Нижняя часть страницы -->
			&copy; Footer, 2000 - <?= date('Y')?>
			<!-- Нижняя часть страницы -->
		</div>

    </div>

	</body>
</html>