<?PHP

print_r(PDO::getAvailableDrivers());



$dbh = new PDO('mysql:host=localhost;dbname=pro_demo', "root", "");
    foreach($dbh->query('SELECT * from menu') as $row) {
        print_r($row);
    }
    $dbh = null;

?>