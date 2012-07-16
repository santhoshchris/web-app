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


	$sql = $db->query('
		SELECT items
		FROM groceries
		WHERE checked = 1
	
		');
	
	$results = $sql->fetchAll();
	
		



?> 

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Flexible Layouts</title>
		<link href="css/general.css" rel="stylesheet">

		<script src="js/list-java.js"></script>
		</head>
	<body>
       
    <div class="col-group clearfix">
		
			<div class="col-left">
            
            <img src="buttons/dairy.png" width="139" height="139" alt="dairy">
            <img src="buttons/fish.png" width="138" height="138" alt="fish">
      <img src="buttons/fruitsveggies.png" width="138" height="138" alt="veggiesfruits">
      <img src="buttons/other.png" width="136" height="136" alt="other">
        <img src="buttons/edit.png" width="105" height="68" alt="edit"> <p>
      <img src="buttons/undo.png" width="63" height="78" alt="undo">
      <img src="buttons/save.png" width="56" height="76" alt="save">
   </div>
<div class="col-right">
			  
    <h1>Fruits</h1>
              
              <p>
              
<form method="post" action="displaylist.php">
    <input id="item" autofocus>
   
    
    
    <input type="checkbox" name="apples" value="1" />Apples <br/>
    <input type="checkbox" name="bananas" value="1" />Bananas <br>
    <input type="checkbox" name="grapes" value="1" />Grapes <br>
    <input type="checkbox" name="oranges" value="1" />Oranges <br>
    <input type="checkbox" name="pineapple" value="1" />Pineapple <br>

	 <h1>Vegetables</h1>

    <input type="checkbox" name="beans" value="1" />Beans <br>
    <input type="checkbox" name="carrots" value="1" />Carrots <br>
    <input type="checkbox" name="celery" value="1" />Celery <br>
    <input type="checkbox" name="potatoes" value="1" />Potatoes <br>
    <input type="checkbox" name="tomatoes" value="1" />Tomatoes <br>

	 <button type="submit" id="additem">Add items</button>
     
     
</form>


                    
      </div>
                         
      <div class="col triple">
                     
                       	 <h1>FINAL LIST </h1>	
                        
     
        <ul>                        
    <?php
                foreach($results as $item){
					
				echo('<li>'.$item[0].'</li>')	;
				}
         ?>  
         </ul>
          </div>       
    </div> 
	</body>
    
</html>