<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sky Light Books | Single Book</title>

    <!--Styles -->
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/single.css" rel="stylesheet">
    <link  href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body class="home">
<!--Header Navigation Bar -->
<header class="header">
        <h1><i class="fa fa-shopping-cart" style="color: orangered"></i> XCNG</h1>
        <ul class="link-navigation">
            <li><a href="../index.php"><i class="fa fa-home"></i> home</a></li>
            <li><a href="signin.php"><i class="fa fa-sign-in"></i> sign in</a></li>
            <li class="home-link"><a href=".html"><i class="fa fa-user-circle-o"></i> sign up</a></li>
            <li><a href="allitems.php"><i class="fa fa-book"></i> books</a></li>
            <li><a href="checkout.php"><i class="fa fa-cart-plus"></i> checkout (2)</a></li>
        </ul>
    </header>
<!--Main Content -->
<main>
<h3 class="bookDetailsHeader">Item Details</h3>
<div class="booKDisplayDiv">
    <img src="../images/assets/item2.jpg" height="170px" width="150px">
    <div class="bookDetails">
        <h3>Hell's Armor </h3>
        <p>Rs. 200</p>
        <p><i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            <i class="fa fa-star-half-full"></i></p>
        <button onclick="addToCart();"><i class="fa fa-cart-plus" style="color: orangered" ></i> Add to Cart </button>
    </div>
</div>

<h3 class="bookDescriptionHeader">Item Descriptions</h3>
<div class="bookDescription">
    <p>...........
    </p>
    <ul>
    <li>Attack: 470</li>
    <li>Health: 430</li>
    <li>Toughness: 470</li>
    <li>Recovery: 410</li>
    <li>Power Gen: 100%</li>
    </ul>
</div>

    <h3 class="bookDescriptionHeader">Recommended Items</h3>
    <div class="recommendedBooks">
    <img src="images/assets/item1.jpg" height="150px" width="150px">
            <img src="images/assets/item2.jpg" height="150px" width="150px">
            <img src="images/assets/item3.jpg" height="150px" width="150px">
            <img src="images/assets/item4.jpg" height="150px" width="150px">
            <img src="images/assets/item7.jpg" height="150px" width="150px">
            <img src="images/assets/item9.jpg" height="150px" width="150px">">
    </div>
</main>

<footer>
    <p> &copy; Copyright 2018</p>
</footer>

<script src="../js/allbooks.js" type="text/javascript"></script>
</body>
</html>
