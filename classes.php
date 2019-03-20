<!doctype html>
<html lang="ru">
<html>
	<head>
	<meta charset="utf-8">
		<title>
			classes
		</title>
	</head>
	<body>
<?php
class Publication{
	
	## Свойства которые точно соотвествуют полям базы данных.
	public $id;
	public $title;
	public $date;
	public $short_content;
	public $content;
	public $preview;
	public $author_name;
	public $type;
	
		## Передаём аргумент являющийся массивом
		## $row массив который мы создали и передали из файла data.php
		function __construct($row){
			$this->id = $row['id'];
			$this->title = $row['title'];
			$this->date = $row['date'];
			$this->short_content = $row['short_content'];
			$this->content = $row['content'];
			$this->preview = $row['preview'];
			$this->author_name = $row['author_name'];
			$this->type = $row['type'];
		}
		
}
class NewsPublication extends Publication
{
	public function printItem(){
		echo '<br> Вызван метод '.__METHOD__;
		echo '<br> Это новость';
		echo '<br> Новость: '.$this->title;
		echo '<br> Дата: '.$this->date;
		echo'<hr>';
		
	}
}
class ArticlePublication extends Publication
{
	public function printItem(){
		echo '<br> Вызван метод '.__METHOD__;
		echo '<br> Это статья';
		echo '<br> Статья: '.$this->title;
		echo '<br> Автор: '.$this->author_name;
		echo '<br> <img src="'.$this->preview.'">';
		echo'<hr>';
	}
}
class PhotoReportPublication extends Publication
{
	public function printItem(){
		echo '<br> Вызван метод '.__METHOD__;
		echo '<br> Это фотоотчёт';
		echo '<br> Фотоотчёт: '.$this->title;
		echo '<br> <img src="'.$this->preview.'">';
		echo'<hr>';
	}
}
?>
	</body>
</html>