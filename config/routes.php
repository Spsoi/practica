<!doctype html>
<html lang="ru">
<html>
	<head>
	<meta charset="utf-8">
		<title>
			routes
		</title>
	</head>
	<body>
<?php
return array(
	## Вызови метод(функцию) actionIndex в контроллере NewsController
	'news'=>'news/list', 
	'products'=>'product/list', ## actionList in ProductControll
	'news/archive'=>'news/archive',
);
?>
	</body>
</html>