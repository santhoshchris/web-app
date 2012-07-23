<?php

include 'includes/db.php';

$sql = $db->query('
	SELECT time_updated
	FROM groceries
	ORDER BY time_updated DESC
	LIMIT 1
');
$results = $sql->fetch();

$sql = $db->prepare('
	UPDATE groceries
	SET checked = 0, time_updated = 0
	WHERE time_updated = :time_updated
');
$sql->bindValue(':time_updated', $results['time_updated'], PDO::PARAM_INT);
$sql->execute();

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit;