
<?php   

/*
$apples = filter_input(INPUT_POST, 'apples', FILTER_SANITIZE_NUMBER_INT);
$bananas = filter_input(INPUT_POST, 'bananas', FILTER_SANITIZE_NUMBER_INT);
$grapes = filter_input(INPUT_POST, 'grapes', FILTER_SANITIZE_NUMBER_INT);
$oranges = filter_input(INPUT_POST, 'oranges', FILTER_SANITIZE_NUMBER_INT);
$pineapple = filter_input(INPUT_POST, 'pineapple', FILTER_SANITIZE_NUMBER_INT);
$beans = filter_input(INPUT_POST, 'beans', FILTER_SANITIZE_NUMBER_INT);
$carrots = filter_input(INPUT_POST, 'carrots', FILTER_SANITIZE_NUMBER_INT);
$potatoes = filter_input(INPUT_POST, 'potatoes', FILTER_SANITIZE_NUMBER_INT);
$tomatoes = filter_input(INPUT_POST, 'tomatoes', FILTER_SANITIZE_NUMBER_INT);


*/

include 'includes/db.php';

	$sql = $db->prepare('
		UPDATE groceries
		SET checked = 0	
		');
	
		$sql->execute(); 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$sql = $db->prepare('
		UPDATE groceries
		SET checked = 1
		WHERE items = :item
	
		');
		
		foreach($_POST as $key=>$value) {
		
		$sql->bindValue(':item', $key, PDO::PARAM_STR);
		$sql->execute();
		
		}
		
		header('Location: index.php');
		exit;
		
}


?> 
