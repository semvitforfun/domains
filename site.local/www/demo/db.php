<?php
header("Content-type: text/html; charset=utg-8");
$link = mysqli_connect('localhost', 'root', '', 'web');

mysqli_query($link, "SET NAMES 'cp1251'"); //convert results to cp1251 when get data

$sql = 'SELECT * FROM teachers';
$sql = mysqli_real_escape_string($link, $sql);
$res = mysqli_query($link, $sql) or die(mysqli_error($link));

//mysqli_free_result($res); //free result if not needed any more


var_dump($res);

while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)){ //MYSQLI_NUM | MYSQLI_BOTH
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}
echo '<br>';
echo mysqli_num_rows($res);

echo '<br>';
echo mysqli_num_fields($res);

echo '<br>';
echo mysqli_affected_rows($link);

echo '<br>';
echo mysqli_field_count($link);


//$row = mysqli_fetch_all($res);
//echo '<pre>';
//print_r($row);
//echo '</pre>';


mysqli_close($link);

?>


