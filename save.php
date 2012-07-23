<?php

header('Content-disposition: attachment; filename=groceries.txt');
header('Content-type: plain/text');

include 'includes/db.php';

$sql = $db->query('
	SELECT items
	FROM groceries
	WHERE checked = 1
');

$results = $sql->fetchAll();

foreach($results as $item){
	echo '- ' . $item[0]. "\r\n";
}