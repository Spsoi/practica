<!doctype html>
<html lang="ru">
<html>
	<head>
	<meta charset="utf-8">
		<title>
			Publication
		</title>
	</head>
	<body>
<?php
// FRONT CONTROLLER

//1.Общие настройки
ini_set ('display_errors',1);
error_reporting(E_ALL); 

//2.Подключение файлов системы
## Создадим папку components и поместим туда файл Router.php
## Подключаем его
define ('ROOT',dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

//3.Установка соединения с БД


//4.Вызов Router
$router = new Router();
$router->run();
## настройка Front controllera закончена го в Router



/* AddDefaultCharset utf-8

RewriteEngine on разрешаем перенаправление
RewriteBase /
RewriteRule ^(.*)$ index.php нужно перенаправлять все запросы в файл index.php*/ 
?>
	</body>
</html>