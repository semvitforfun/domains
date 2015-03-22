<?
$dt = time();
$host = $_SERVER['REMOTE_ADDR'];
$page = $_SERVER['REQUEST_URI'];
$ref = $_SERVER['HTTP_REFERER'];
$ref = pathinfo($ref, PATHINFO_BASENAME);

$path = "$dt|$host|$page|$ref\n";
file_put_contents('log/'.PATH_LOG, $path, FILE_APPEND);
//file_put_contents('log/'.PATH_LOG, serialize($_SERVER), FILE_APPEND);
?>
