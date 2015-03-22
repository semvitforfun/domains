<?php
	require "secure/session.inc.php";
	require "../inc/db.inc.php";
?>
<html>
<head>
	<title>Поступившие заказы</title>
</head>
<body>
<h1>Поступившие заказы:</h1>
<?php
$orders = getOrders();
//print_r($orders);
foreach($orders as $order){

//    echo "<pre>";
//    print_r($order);
//    echo "</pre>";


?>
<hr>
<h2>Заказ номер: <?= $order['orderid']?></h2>
<p><b>Заказчик</b>: <?= $order['name']?></p>
<p><b>Email</b>: <?= $order['email']?></p>
<p><b>Телефон</b>: <?= $order['phone']?></p>
<p><b>Адрес доставки</b>: <?= $order['address']?></p>
<p><b>Дата размещения заказа</b>: <?= date('d-m-Y h:m:s' , $order['dt'])?></p>


<h3>Купленные товары:</h3>
<table border="1" cellpadding="5" cellspacing="0" width="90%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, руб.</th>
	<th>Количество</th>
</tr>

<?PHP
    $c = 0;
    $sum = 0;
    foreach($order['goods'] as $good){
        $c++;
        $sum += $good['price'];
        echo "<tr>";
        echo "<td> $c </td>";
        echo "<td> {$good['title']} </td>";
        echo "<td> {$good['author']} </td>";
        echo "<td> {$good['pubyear']} </td>";
        echo "<td> {$good['price']} </td>";
        echo "<td> {$good['quantity']} </td>";
        echo "</tr>";

    }
?>
</table>
<p>Всего товаров в заказе на сумму: <?=$sum?> руб.</p>
<hr>

<?PHP

}
?>
</body>
</html>