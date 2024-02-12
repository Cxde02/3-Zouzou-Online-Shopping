<?php require_once("config.php"); ?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | 3Zouzou</title>
    <link rel="icon" type="image/x-icon" href="images/e.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/ae34ef9d65.js" crossorigin="anonymous"></script>

</head>



<body id="pproducts">
	<div class="container">
	    <?php include("productsnavbar.php") ?>
	</div>

	<div class="small-container">
		<div class="row row-2">

		</div>
	   <div class="row row-2">

	       <h2 id="Allp">All Products</h2>

	       <div class="row">
	       	<div class="col" style="padding-right: 50px;">
	       		<?php search(); ?>
	       		<form class="" action="" method="post" enctype="multipart/form-data">
	       			<div class="form-group">
			       		<input type="text" name="search" placeholder="Search">
			       	</div>
			       	<div class="form-group">
			       		<input type="submit" name="search_product" class="btn btn-primary" value="Search">
			       	</div>
			       </form>
	       	</div>
	       	<div class="col">
	       			       	<div class="dropdown">
				<button class="dropbtn">Categories</button>
				<div class="dropdown-content">
					<?php get_categories();?>

				</div>
			</div>
	       	</div>

	       </div>

	   </div>
           <div class="row" >

              <?php get_products(); ?>

           </div>

</div>




    <?php include("footer.php") ?>

