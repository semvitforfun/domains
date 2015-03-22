<?php
header("Content-Type: text/html;charset=utf-8");	
	// Создание парсера
	$sax = xml_parser_create('utf-8');
	// Назначение обработчиков начальных и конечных тегов
	xml_set_element_handler($sax, 'onStart', 'onEnd');
	//  Назначение обработчика текстового содержимого
	xml_set_character_data_handler($sax, 'onText');
	// Функция обработчик начальных тегов
	function onStart($parser, $tag, $attrs){
        if($tag != 'BOOK' and $tag != 'CATALOG')
            echo '<td>';
        if($tag == 'BOOK')
            echo '<tr>';

    }
	// Функция обработчик закрывающих тегов
    function onEnd($parser, $tag){
        if($tag != 'BOOK' and $tag != 'CATALOG')
            echo '</td>';
        if($tag == 'BOOK')
            echo '</tr>';
    }
	// Функция обработчик текстового содержимого
    function onText($parser, $text){
        echo $text;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>Каталог</title>
	</head>
	<body>
	<h1>Каталог книг</h1>
	<table border="1">
		<tr>
			<th>Автор</th>
			<th>Название</th>
			<th>Год издания</th>
			<th>Цена, руб</th>
		</tr>
	<?php
		//Парсинг
        xml_parse($sax, file_get_contents('catalog.xml'));
	?>
	</table>
	</body>
</html>