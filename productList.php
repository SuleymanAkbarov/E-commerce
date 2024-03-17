<?php 
include_once('classes/cont.php');
include_once('components/header.php');


$pro = new product();
$category = $_GET['category'];
$item = $pro->forlist($category);

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php $title = ucwords($category); echo $title; ?></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/list.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<body>
	<div class="container">
    <h3 class="h3"><?php echo "Category: ".$category; ?></h3>
    <div class="row">
        <?php 
        if($item){

        foreach ($item as $p) {
        	$number = $p['Number'];
        	if($number>0){
        	$id = $p['ID'];
        	$name = $p['Name'];
        	$cost = $p['Cost'];
        	$discount = $p['Discount'];
        	$image = $p['Image'];

        	if($discount != 0){
        		$pre = "$".$cost;
        		$cost = $cost - $discount * $cost / 100;
        	}
        	else{
        		$pre = "";
        	};

        	echo "<div class='col-md-3 col-sm-6'>
             <div class='product-grid6'>
              <div class='product-image6'>
                    <a href='productDetails.php?id={$id}'>
                        <img class='pic-1' src='data:image;base64,".base64_encode($image)."'>
                   </a>
                </div>
                <div class='product-conten'>
                    <h3 class='title'><a href='productDetails.php?id={$id}'>".$name."</a></h3>
                    <div class='price'>$".$cost."
                        <span>".$pre."</span>
                    </div>
                </div>             
             </div>
             </div>";
        };
        }; 
        };      
        
        ?>
        
    </div>
</div>
<?php
 if($item)
    {foreach ($item as $d)
        { if($d['Number'] != 0)
        {break;}else{echo "<div class='no-p'><h4>No product to show</4></div>";};
    }
}else{echo "<div class='no-p'><h4>No product to show</4></div>";}

?>
<hr>


</body>
<?php include_once('components/footer.php'); ?>
</html>