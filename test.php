<?php
include 'db.php';


foreach ($dbh->query('SELECT * FROM login') as $row) {
	echo "<pre>" . print_r($row,1) . "</pre>";
}

/*
$statement = $dbh->query("SELECT * FROM login");
$row = $statement->fetch(PDO::FETCH_ASSOC);

var_dump($row);
echo "<pre>" . print_r($row,1) . "</pre>";
*/

?>