<?php require_once("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | 3Zouzou</title>
    <link rel="icon" type="image/x-icon" href="images/e.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="containercart">

    <?php include("navbarshoppingcart.php") ?>

        <div class="shopping-carttitle">
            <h3>Your Shopping Cart</h3>
        </div>

       
<div class="small-container cart-page">

    <h4 class="text-center bg-danger" id="warningtext"><?php display_message(); ?></h4>

   
   <table>
       <tr>
           <th>Product</th>
           <th></th>
           <th>Quantity</th>
           <th>Subtotal</th>

       </tr>
        <?php cart(); ?>

       
   </table>
    
    <div class="total-price">
        <table>
            <tr>
                <td>Items</td>
                <td><?php echo isset($_SESSION['total_number']) ? $_SESSION['total_number'] : $_SESSION['total_number'] = "0"; ?></td>
            </tr>
            <tr>
                <td>Shipping and Handling</td>
                <td>Free</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>Rs <?php echo isset($_SESSION['total_price']) ? $_SESSION['total_price'] : $_SESSION['total_price'] = "0"; ?></td>
            </tr>
            
        </table>
    </div>
    <div class="total-price">
       <a href="products.php" class="btn">Continue</a>
        <a href="checkout.php" class="btn">Proceed to checkout &#8594;</a>
    </div>
    
</div>
</div>

	<?php include("footer.php") ?>