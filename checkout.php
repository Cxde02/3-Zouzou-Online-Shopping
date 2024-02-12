<?php require_once("config.php");

unset($_SESSION['cart_item']); // Clear the cart session variable
$conn = null; // Close connection

?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | 3Zouzou</title>
    <link rel="icon" type="image/x-icon" href="images/e.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script  src="functions.js"></script>
</head>
<body>
    <?php include("checkoutnavbar.php") ?>
    <h6 style="text-align: center;" class="text-center bg-warning"><?php display_message();?></h6>


       
<div class="add-product-page">
    <div class="container" style="padding-left: 500px;">
        <h3>Order Information</h3>

  
       <div class="row">

           <div class="col-2checkout">
              <div class="">
                 <div class="form-btn">
                     <br>
                 </div>
                 
                 <form class="" action="" method="post" enctype="multipart/form-data">

                      <div class="col-md-8">
                        
                        <div class="form-group">
                            <div id="address">
                          <label for="product-title">Address</label>
                            </div>
                          <div class="col-orderd">
                          	<input type="text11" name="product_title" placeholder="Enter your address here">
                          </div>
                          </label>
                      </div>

                      <br>

                          <div class="inner">

                        <div style="padding-bottom: 10px;"> <span id="card-inner">Country</span> 
                        </div>
                                <div class="custom-select" style="width:200px;">
                                      <select>
                                        <option value="0">Select Country:</option>
                                        <option value="1">Mauritius</option>
                                        <option value="2">United States</option>
                                        <option value="3">England</option>
                                        <option value="4">Madagascar</option>
                                        <option value="5">China</option>
                                        <option value="6">Germany</option>
                                        <option value="7">Japan</option>
                                        <option value="8">Canada</option>
                                        <option value="9">Rodrigues</option>
                                        <option value="10">Switzerland</option>
                                        <option value="11">Russia</option>
                                        <option value="12">Reunion</option>
                                      </select>
                            </div>
                           <br>

                            <div class="nav">
                                <form> <span id="card-header">Payment Type</span>
                                <div class="row row-1" style="padding-bottom: 10px; padding-top: 10px;">
                                    <div class="col-7">
                                        <div class="custom-select" style="width:200px;">
                                              <select onchange="yesnoCheck(this); wireCheck(this);">
	                                                <option value="0">Choose Payment Type</option>
	                                                <option value="credit">Credit Card</option>
	                                                <option value="juice">Juice</option>
                                              </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                          </div>
                            <form id="ifYes" style="display: none;" onsubmit="return false"> <span id="card-header"></span>
                                            <div>
                                                <div class="col-orderd" style="padding-bottom: 15px; padding-top: 10px">
                                                    <span id="card-inner">Card number</span> 
                                                </div>
                                                <div class="row">
                                                	<div class="col-orderd">
                                                    	<input type="text" placeholder="**** **** **** 3193">
                                                	
                                                	</div>
                                                    
                                                </div>
                                            </div>
                                            <div class="row three">
                                                <div class="col-orderd">
                                                    <div class="">
                                                        <div class="row row-2" style="padding-top: 5px; padding-bottom: 10px"> <span id="card-inner" style="float: left">Expiry Date</span> </div>
                                                        <div class="row row-2"> <input type="text" placeholder="dd/mm/yyyy"> </div>
                                                    </div>
                                                </div>

                                                <div class="row three">

                                                    <div class="col-orderdcvv">
                                                        <div class="">
                                                            <div class="row row-2" style="padding-top: 5px; padding-bottom: 10px"> <span id="card-inner" style="float: left">CVV</span> </div>
                                                            <div class="row row-2"> <input type="text" placeholder="***"> </div>
                                                        </div>
                                                    </div>

                                            </div>
                                            </div>
                                        </form>
                                        <br>
                                        <form id="ifWire" style="display: none;" onsubmit="return false"> <span id="card-header"></span>
                                            <div class="row three">
                                            	<div class="col-2">
                                            		<span id="card-inner">Account Name</span> 
                                            	</div>
                                            </div>
                                                <div class="row row-2accname">
                                                    <input type="text11" placeholder="Enter account name">
                                                </div>
                                                <div class="form-group">
                                                    <div class="row row-2accname">
                                                     <span id="card-inner" style="float: left">Account Number</span>
                                                    </div>
                                                        <div class="col-2"> <input type="text11" placeholder="Enter account number"> </div>

                                                </div>

                                                <div class="form-group">
                                                    <div class="row row-2accname">
                                                        <span id="card-inner" style="float: left">Bank Name</span>
                                                    </div>
                                                        <div class="col-2"> <input type="text11" placeholder="Enter bank name"></div>
                                                </div>


                                        </form>


                        <div class="form-group">
                          <div class="row">
                            <div class="col-orderd">
                              <a class="btn" style="text-align: center;" href="shopping_cart.php">Back</a>
                            </div>
                        </div>
                          <div class="row">
                            <div class="col-orderd">
                              <a href="index.php" style="text-align: center;" class="btn" id="ppp" onclick=JSalert()>Purchase</a>

                            </div>

                              <img id="profileteddy2" src="images/tb.png" width="60%">

                          </div>
                        </div>
                      </div>

                       </div>

            </form>
              </div>

           </div>

       </div>
       <br>
</div>
</div>



    <?php include("footer.php") ?>

