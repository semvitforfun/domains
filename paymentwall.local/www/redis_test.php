<?PHP
include_once  "public/predis-1.0/autoload.php";

$client = new Predis\Client();
$client->set('foo', 'bar');
$value = $client->get('foo');

echo $value;
