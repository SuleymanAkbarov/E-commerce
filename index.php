<?php include_once('components/header.php'); ?>

<html>
<head>
	<title>Shopping</title>
	<link rel="stylesheet" href="css/style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/categories.css">
    <link rel="stylesheet" href="css/footer.css">

</head>
<body>
	    <section class="py-5">
	    	<div class="container">
	            <div class="row">
		            <div class="col-md-4">
	                    <a href="productList.php?category=electronics"><img src="pictures/pic5.jpg"></a>
		                <a href="productList.php?category=electronics"><h2>Electronics</h2></a>
		            </div>
		            <div class="col-md-4">
		                <a href="productList.php?category=furniture"><img src="pictures/pic3.jpg"></a>
		                <a href="productList.php?category=furniture"><h2>Furniture</h2></a>
		            </div>
		            <div class="col-md-4">
		                <a href="productList.php?category=shoes"><img src="pictures/pic2.jpg"></a>
		                <a href="productList.php?category=shoes"><h2>Shoes</h2></a>
		            </div>
	            </div>
            </div>
            <div class="container">
	            <div class="row">
		            <div class="col-md-4">
	                    <a href="productList.php?category=cars"><img src="pictures/pic4.jpg"></a>
		                <a href="productList.php?category=cars"><h2>Cars</h2></a>
		            </div>
		            <div class="col-md-4">
		                <a href="productList.php?category=fashion"><img src="pictures/pic1.jpg"></a>
		                <a href="productList.php?category=fashion"><h2>Fashion</h2></a>
		            </div>
		            <div class="col-md-4">
		                <a href="productList.php?category=all"><img src="pictures/pic5.jpg"></a>
		                <a href="productList.php?category=all"><h2>All</h2></a>
		            </div>
	            </div>
            </div>

        </section>
</body>
<?php include_once('components/footer.php'); ?>
</html>