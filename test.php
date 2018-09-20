<?php
include 'db.php';


foreach ($dbh->query('SELECT * FROM login') as $row {
	print_r($row);
}

$statement = $dbh->query("SELECT * FROM login");
$row = $statement->fetch(PDO::FETCH_ASSOC);

var_dump($row);
echo "<pre>" . print_r($row,1) . "</pre>";

?>