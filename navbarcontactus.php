<div class="navbarcontact">
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/ae34ef9d65.js" crossorigin="anonymous"></script>


    <div class="logo">
        <a href="index.php"><img src="images/TheLogo.png" width="350px"></a>

    </div>

    <nav>
        <ul id="MenuItems">
            <li id="menu"><i class="fa fa-house" aria-hidden="true"></i><a href="index.php"> Home</a></li>

            <div class="dropdown">
                <li id="menu"><i class="fa fa-cubes-stacked" aria-hidden="true"></i><a href="products.php"> Products</a></li>
                <div class="dropdown-content">
                    <a href="category_page.php?id=1">🎎 Dolls</a>
                    <a href="category_page.php?id=2">🧩 Puzzle</a>
                    <a href="category_page.php?id=3">🎲 Board Games</a>
                    <a href="category_page.php?id=4">⛹️‍ ️Figurines</a>
                    <a href="category_page.php?id=5">🧱 Lego</a>
                    <a href="category_page.php?id=6">⚡ Electronics</a>
                </div>
            </div>

            <li id="menu"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="shopping_cart.php"> Cart</a></li>
            <li id="menu"><i class="fa fa-circle-info" aria-hidden="true"></i><a href="#footerid"> About Us</a></li>

            <li id="menu"><i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo isset($_SESSION['username']) ? "profile.php?id={$_SESSION['user_id']}" : "login_page.php"?>"> <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : "Login"?></a></li>
            <li id="menu"><a href="logout.php"><i class="fa fa-fw fa-power-off"></i> <?php echo isset($_SESSION['username']) ? "Logout" : "" ?></a></li>
            <li id="menu"><a href="admin_index.php"><?php if(isset($_SESSION['username']) &&  ($_SESSION['username'] == 'admin') ) {
                        echo "Panel";
                    } else {
                        echo "";
                    } ?></a></li>

        </ul>
    </nav>
    <img src="images/menu.png" onclick="menutoggle()" class="menu-icon">

</div>
