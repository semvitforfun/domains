<?php

// Подключаем класс для работы с изображением
include_once 'LImageHandler.php';

// Подключаем выбранный шрифт текста
$fontPath = 'fonts/arial.ttf';

// Путь к оригинальному изображению
$imagePath = 'images/Desert.jpg';

// Указываем размер шрифта 
$fontSize = 25;

// Задаем цвет
$colorArray = array(255, 255, 255);

// Создаем экземпляр класса LImageHandler
$ih = new LImageHandler;

// Загружаем изображение
$imgObj = $ih->load($imagePath);

// Выполняем наложение текста на изображение
$imgObj->text('Generated text on spot', $fontPath, $fontSize, $colorArray, LImageHandler::CORNER_CENTER_TOP, 0, 150);
$imgObj->text('Vitaliy', $fontPath, 30, $colorArray, LImageHandler::CORNER_RIGHT_BOTTOM, 50, 50);

$imgObj->show(false, 100);

?>