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
## Подключи data.php чтобы получить массив который там создался
## 
require_once 'data.php';

foreach ($publications as $item){
	## Получаем название класса текущего объекта
	echo 'В переменной $item находится объект класса '.get_class($item).'<br>';
	## вызываем метод(функцию) которая есть в классе объекта $item
	$item->printItem();
}
?>
	</body>
</html>