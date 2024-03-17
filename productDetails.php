<?php 
include_once('classes/cont.php');
include_once('components/header.php');

$product = new product();
$id = $_GET['id'];
$item = $product->fordetail($id);
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $item[0]['Name']; ?></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/product_details_style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
</head>
<body>
	<?php 
	foreach ($item as $p){
		$number = $p['Number'];
		if ($number>0) {
			$image = $p['Image'];
			$name = $p['Name'];
			$cost = $p['Cost'];
			$discount = $p['Discount'];
			$about = $p['About'];
			if($discount != 0){
        		$pre = "$".$cost;
        		$cost = $cost - $discount * $cost / 100;
        		$discount = $discount."% Discount";
        	}
        	else{
        		$discount = "";
        	};
        	if (isset($_POST['buy'])) {
    	        header("Refresh:0");
		        $product->buy($id);
    	    };
		

	echo "<div class='container'>
		<div class='card'>
			<div class='container-fliud'>
				<div class='wrapper row'>
					<div class='preview col-md-6'>						
						<div class='preview-pic tab-content'>
						  <div class='tab-pane active' id='pic-1'><img src='data:image;base64,".base64_encode($image)."'></div>
						</div>					
					</div>
					<div class='details col-md-6'>
						<h3 class='product-title'>".$name."</h3>
						<p class='product-description'>".$about."</p>
						<h4 class='price'>current price: <span>$".$cost."</span></h4>
						<h4 class='price'>".$discount."</h4>
						<h6 class='price'>Number of product in stock: ".$number."</h6>		
						<div class='action'>
	                     <form method='POST'>
                                  <input class='add-to-cart btn' type='submit' name='buy' value='Buy' >
                              </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	 </div>";}else{echo "<div class='no-p'><h4>This product is not in stock</4></div>";}
	};


    ?>
		
</body>
<?php include_once('components/footer.php'); ?>
</html>