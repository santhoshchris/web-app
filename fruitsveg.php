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


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$sql = $db->prepare('
		UPDATE groceries
		SET checked = 1, time_updated = :time_updated
		WHERE items = :item
	
		');
		
		foreach($_POST as $key=>$value) {
		
		$sql->bindValue(':item', $key, PDO::PARAM_STR);
		$sql->bindValue(':time_updated', time(), PDO::PARAM_INT);
		$sql->execute();
		
		}
		
}


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
		<title>Fruits &amp; Vegetables</title>
		<link href="css/general.css" rel="stylesheet">

	<script src="js/list-java.js"></script>
		<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
        </script>
	</head>
	<body onLoad="MM_preloadImages('buttons/dairy2.png','buttons/fruitsveggies2.png','buttons/fish2.png','buttons/other2.png')">
       
    <div class="col-group clearfix">
		
			<div class="col-left">
            
             <img src="buttons/fruitsveggies2.png" width="138" height="138" alt="veggiesfruits">
            
            <a href="dairy.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','buttons/dairy2.png',1)"><img src="buttons/dairy.png" name="Image8" width="139" height="139" border="0"></a> 
            
            <a href="fish.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','buttons/fish2.png',1)"><img src="buttons/fish.png" name="Image9" width="138" height="138" border="0"></a>
    		
            <a href="other.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('other','','buttons/other2.png',1)"><img src="buttons/other.png" name="other" width="136" height="136" border="0"></a><a href="undo.php"><img src="buttons/undo.png" width="63" height="78" alt="undo"></a>
      
      <a href="save.php"><img src="buttons/save.png" width="56" height="76" alt="save"></a>
      
   </div>
<div class="col-right">
			  
    <h1>Fruits</h1>
              
              <p>
              
<form method="post" action="fruitsveg.php">
  <p>
    
    
    
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
    
    <p>

	 <button type="submit" id="additem">Add items</button>
     
     
</form>
                    
      </div>
      
       <div class="final">     
                      
		<?php 
        
    include 'includes/list-final.php';
    
    ?> 
    
    </div>
         
        </ul>
      </div>       
    </div> 
</body>
    
</html>