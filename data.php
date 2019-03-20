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
## Собрать все нужные данные и поместить в один массив
## подключим классы которые мы объявили в classes.php
require_once 'classes.php';
## Объявим массив в который положим результат.
$publications = array();
$connection = mysqli_connect("192.168.0.158","root","","polimorfizm");
	if (mysqli_connect_error){
		echo "Не возможно подключится к MySQL". mysqli_connect_error();
	}
		## по очереди получаем доступ к каждой выбранной записи
		## Заливаем всю таблицу в переменную
	$result = mysqli_query($connection, "SELECT * FROM publication");
		while ( $row = mysqli_fetch_assoc($result)){
			## наполняем массив объектами в этом цикле
			## $row['type'] = имени дочернего класса
			## $publications[] = NewsPublication
			## $publications[] = ArticlePublication
			## $publications[] = PhotoReportPublication
			## вытаскиваем из массива $row
			## 
			$publications[] = new $row['type']($row);
		
		}
?>
	</body>
</html>